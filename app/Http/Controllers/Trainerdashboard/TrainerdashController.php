<?php

namespace App\Http\Controllers\Trainerdashboard;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class TrainerdashController extends Controller
{
    public function trainerdashboard(){
        
        return view('trainer.trainer');
    }
}
