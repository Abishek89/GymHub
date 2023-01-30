<?php

namespace App\Http\Controllers;

use App\Models\Trainer;

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

    public function addexpenses(){
        
        return view('admin.addexpenses');
    }
 
    public function trainers(){
        $trainer=Trainer::all();
        return view('admin.addtrainers');
    }

    public function sendmessage(){
        
        return view('admin.sendmessage');
    }
}
