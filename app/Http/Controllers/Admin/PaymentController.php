<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Payment;
use Illuminate\Http\Request;

class PaymentController extends Controller
{
    public function addpayment(Request $request){
        $payment=new Payment();
        $payment->paymentname=$request->paymentname;
        $payment->amount=$request->amount;
        $payment->paymenttype=$request->paymenttype;
        $payment->description=$request->description;
        $payment->save();
        return redirect()->back();
    }
}
