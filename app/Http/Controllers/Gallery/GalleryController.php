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
        return redirect()->back();
    }



    public function upload(){
        
        return view('admin.gallery.uploadphoto');
    }

    //get method to view the added plan
    public function view(){
        return view('admin.gallery.viewupload');
    }
}
