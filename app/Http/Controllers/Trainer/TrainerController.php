<?php

namespace App\Http\Controllers\Trainer;

use App\Http\Controllers\Controller;
use App\Models\Trainer;
use Illuminate\Http\Request;

class TrainerController extends Controller
{

    public function store(Request $request){
        $trainer=new Trainer();
        $trainer->trainername=$request->trainername;
        if($request->hasfile('image'))
        {
            $file = $request->file('image');
            $extenstion = $file->getClientOriginalExtension();
            $filename = time().'.'.$extenstion;
            $file->move('uploads/trainers/', $filename);
            $trainer->image = $filename;
        }
        $trainer->facebook=$request->facebook;
        $trainer->instagram=$request->instagram;
        $trainer->twitter=$request->twitter;
        $trainer->save();
        return redirect('viewtrainers')->with('flash_message','Trainer Data Uploaded Successfully');
    }

    public function add(){
        $trainer=Trainer::all();
        return view('admin.trainer.addtrainers');
    }

    //get method to view the added plan
    public function view(){
        return view('admin.trainer.viewtrainers');
    }

     //get method to delete the trainer profile
     public function delete($id)
     {
         $trainer = Trainer::find($id);
         if (!is_null($trainer)) {
             $trainer->delete();
         }
         return redirect('viewtrainers');
     }
 
    //method to edit the trainer profile
     public function edit($id)
     {
         $trainer = Trainer::find($id);
         return view('admin.trainer.edittrainer', compact('trainer'));
     }

     //method to update the trainer profile
     public function update(Request $request, $id)
     {
         $trainer = Trainer::find($id);
         $trainer->trainername=$request->trainername;
         if($request->hasfile('image'))
        {
            $file = $request->file('image');
            $extenstion = $file->getClientOriginalExtension();
            $filename = time().'.'.$extenstion;
            $file->move('uploads/trainers/', $filename);
            $trainer->image = $filename;
        }
         $trainer->facebook=$request->facebook;
         $trainer->instagram=$request->instagram;
         $trainer->twitter=$request->twitter;
         $trainer->update();
 
         return redirect('viewtrainers')->with('success', 'Trainer added successfully.');
     }

}

