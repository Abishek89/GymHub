<?php

namespace App\Http\Controllers\Payment;

use App\Http\Controllers\Controller;
use App\Models\Payment;
use Illuminate\Http\Request;

class PaymentController extends Controller
{
    public function store(Request $request){
        $payment=new Payment();
        $payment->paymentname=$request->paymentname;
        $payment->amount=$request->amount;
        $payment->paymenttype=$request->paymenttype;
        $payment->paymentby=$request->paymentby;
        $payment->save();
        return redirect('viewpayment');
    }

    public function create(){
        $payment=Payment::all();
        return view('admin.payment.addpayment');
    }

     //get method to view the added plan
     public function view(){
        return view('admin.payment.viewpayment');
    }
}
