<?php

namespace App\Http\Controllers\Payment;

use App\Http\Controllers\Controller;
use App\Models\Enroll;
use App\Models\Payment;
use Illuminate\Http\Request;

class PaymentController extends Controller
{

    public function verifyPayment(Request $request)
    {
        $token = $request->token;

        $args = http_build_query(array(
            'token' => $token,
            'amount'  => 1000
        ));

        $url = "https://khalti.com/api/v2/payment/verify/";

        # Make the call using API.
        $ch = curl_init();
        curl_setopt($ch, CURLOPT_URL, $url);
        curl_setopt($ch, CURLOPT_POST, 1);
        curl_setopt($ch, CURLOPT_POSTFIELDS,$args);
        curl_setopt($ch, CURLOPT_RETURNTRANSFER, 1);
        $secret_key = "test_secret_key_aa4489ce064b455384fc0529c08e1991";

        $headers = ["Authorization: Key $secret_key"];
        curl_setopt($ch, CURLOPT_HTTPHEADER, $headers);

        // Response
        $response = curl_exec($ch);
        $status_code = curl_getinfo($ch, CURLINFO_HTTP_CODE);
        curl_close($ch);
        return $response;
    }

    public function storePayment(Request $request)
    {
        $enroll_id = $request->input('enroll');
        $enroll = Enroll::where('id',$enroll_id)->first();
        $enroll->payment = true;
        $enroll->save();
    }



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
