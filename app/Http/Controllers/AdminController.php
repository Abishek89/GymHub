<?php

namespace App\Http\Controllers;

use App\Models\Expenses;
use App\Models\Payment;
use App\Models\Products;
use App\Models\Trainer;

class AdminController extends Controller
{

    public function dashboard(){
        
        return view('admin.admindashboard');
    }

    public function payment(){
        $payment=Payment::all();
        return view('admin.addpayment');
    }

    public function product(){
        $products=Products::all();
        return view('admin.addproduct');
    }

    public function expenses(){
        $expenses=Expenses::all();
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
