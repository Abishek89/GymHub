<?php

namespace App\Http\Controllers\Trainerdashboard;

use App\Http\Controllers\Controller;
use App\Models\Customer;
use App\Models\dietplans;
use App\Models\Enroll;
use App\Models\Trainer;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class TrainerdashController extends Controller
{
    public function trainerdashboard(){
        
        return view('trainer.trainer');
    }

    public function member(){
        $id = Auth::user()->id;
        $trainer = Trainer::where('userid',$id)->first();
        $enroll = Enroll::where('trainer',$trainer->id)->where('admin',true)->get();
        return view('trainer.member',compact('enroll'));
    }

    public function active(){

        $trainer= Trainer::where('userid',Auth::user()->id)->first();
        $enroll = Enroll::where('trainer',$trainer->id)->where('status',1)->where('admin',true)->get();
        return view('trainer.active',compact('enroll'));
    }

    public function inactive(){
        
        $trainer= Trainer::where('userid',Auth::user()->id)->first();
        $enroll = Enroll::where('trainer',$trainer->id)->where('status',2)->where('admin',true)->get();
        return view('trainer.inactive',compact('enroll'));
    }

    public function enquiry(){
        $trainer= Trainer::where('userid',Auth::user()->id)->first();
        $enroll = Enroll::where('trainer',$trainer->id)->where('status',0)->where('admin',true)->get();
        return view('trainer.enquiry',compact('enroll'));
    }

    function adddiet(Request $request){

        
        $trainer = Trainer::where('userid',Auth::user()->id)->first();
        $diet = new dietplans();
        $diet->userid = $request->user_id;
        $diet->trainerid = $trainer->id;
        $diet->meal1= $request->meal1;
        $diet->meal2= $request->meal2;
        $diet->meal3= $request->meal3;
        $diet->meal4= $request->meal4;
        $diet->meal5= $request->meal5;
        $diet->meal6= $request->meal6;
        $diet->save();
    }
}
