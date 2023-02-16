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

    public function add(){
        $payment=Payment::all();
        return view('admin.payment.addpayment');
    }

     //get method to view the added plan
     public function view(){
        return view('admin.payment.viewpayment');
    }

    //get method to delete the payment
    public function delete($id)
    {
        $payment = Payment::find($id);
        if (!is_null($payment)) {
            $payment->delete();
        }
        return redirect('viewpayment');
    }

    //method to edit the payment
    public function edit($id)
    {
        $payment = Payment::find($id);
        return view('admin.payment.editpayment', compact('payment'));
    }

    //method to update the payment
    public function update(Request $request, $id)
    {
        $payment = Payment::find($id);
        $payment->paymentname=$request->paymentname;
        $payment->amount=$request->amount;
        $payment->paymenttype=$request->paymenttype;
        $payment->paymentby=$request->paymentby;
        $payment->save();
        return redirect('viewpayment');
    }
}
