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
        $trainer->image=$request->image;
        $trainer->gender=$request->gender;
        $trainer->height=$request->height;
        $trainer->age=$request->age;
        $trainer->weight=$request->weight;
        $trainer->description=$request->description;
        $trainer->save();
        return redirect()->back();
    }
}

