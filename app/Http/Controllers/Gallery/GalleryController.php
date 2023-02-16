<?php

namespace App\Http\Controllers\Gallery;

use App\Http\Controllers\Controller;
use App\Models\Gallery;
use Illuminate\Http\Request;

class GalleryController extends Controller
{
    public function storephoto(Request $request){
        $gallery=new Gallery();
        if($request->hasfile('image'))
        {
            $file = $request->file('image');
            $extenstion = $file->getClientOriginalExtension();
            $filename = time().'.'.$extenstion;
            $file->move('uploads/gallery/', $filename);
            $gallery->image = $filename;
        }
        $gallery->save();
        return redirect('viewupload');
    }



    public function upload(){
        
        return view('admin.gallery.uploadphoto');
    }

    //get method to view the added plan
    public function view(){
        return view('admin.gallery.viewupload');
    }

     //get method to delete the gallery photo
     public function delete($id)
     {
         $gallery = Gallery::find($id);
         if (!is_null($gallery)) {
             $gallery->delete();
         }
         return redirect('viewupload');
     }
}
