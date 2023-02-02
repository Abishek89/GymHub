<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Trainer;
use Illuminate\Http\Request;

class TrainerController extends Controller
{

    public function addtrainers(Request $request){
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
        $trainer->gender=$request->gender;
        $trainer->height=$request->height;
        $trainer->age=$request->age;
        $trainer->weight=$request->weight;
        $trainer->description=$request->description;
        $trainer->save();
        return redirect()->back()->with('flash_message','Trainer Data Uploaded Successfully');
    }
}

