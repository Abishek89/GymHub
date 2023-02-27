<?php

namespace App\Http\Controllers;

use App\Models\Plan;
use App\Models\Products;

class FrontendController extends Controller
{

    public function aboutus(){
        return view('frontend.aboutus');

    }

    public function bmicalculator(){
        return view('frontend.bmi-calculator');
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

    public function shopsingle($id){
        $products=Products::find($id);
        return view('frontend.shopsingle', compact('products'));

    }

    public function addtocart(){
        // $products=Products::find($id);
        return view('frontend.addtocart');

    } 

    public function checkout(){
        // $products=Products::find($id);
        return view('frontend.checkout');

    } 


    public function thankyou(){
        // $products=Products::find($id);
        return view('frontend.thankyou');

    } 
    
    public function team(){
        return view('frontend.team');

    }

    public function enroll($id){
        $plan=Plan::find($id);
        return view('frontend.enrollform' ,compact('plan'));
    }

}
