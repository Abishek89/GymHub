<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class FrontendController extends Controller
{
    public function classdetails(){
        return view('frontend.class-details');

    }

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
        return view('frontend.services');
    
    }

    public function shop(){
        return view('frontend.shop');

    }
    
    public function team(){
        return view('frontend.team');

    }


}
