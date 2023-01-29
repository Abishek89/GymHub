<?php

namespace App\Http\Controllers;

class AdminController extends Controller
{
    public function plan(){
        
        return view('admin.createplan');
    }

    public function addpayment(){
        
        return view('admin.addpayment');
    }

    public function addproduct(){
        
        return view('admin.addproduct');
    }
}
