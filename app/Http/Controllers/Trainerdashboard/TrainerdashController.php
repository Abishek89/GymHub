<?php

namespace App\Http\Controllers\Trainerdashboard;

use App\Http\Controllers\Controller;
use App\Models\Customer;
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
        $enroll = Enroll::where('trainer',$trainer->id)->get();
        return view('trainer.member',compact('enroll'));
    }

}
