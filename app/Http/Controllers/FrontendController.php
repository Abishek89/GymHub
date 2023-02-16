<?php

namespace App\Http\Controllers;

use App\Models\Plan;
use Illuminate\Http\Request;

class FrontendController extends Controller
{

    public function aboutus(){
        return view('frontend.aboutus');

    }

    public function bmicalculator(){
        return view('frontend.bmi-calculator');
    }

    public function contact(){
        return view('frontend.contact');

    }

    public function gallery(){
        return view('frontend.gallery');
    
    }

    public function services(){
        // $plan=Plan::all();
        return view('frontend.services',);

    }

    public function shop(){
        return view('frontend.shop');

    }
    
    public function team(){
        return view('frontend.team');

    }

    public function enroll(){
        return view('frontend.enrollform');
    }

}
