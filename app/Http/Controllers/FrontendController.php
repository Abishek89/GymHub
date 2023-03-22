<?php

namespace App\Http\Controllers;

use App\Models\cart;
use App\Models\Customer;
use App\Models\Enroll;
use App\Models\Order;
use App\Models\Plan;
use App\Models\Products;
use App\Models\Trainer;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Laravel\Ui\Presets\React;

use function GuzzleHttp\Promise\all;

class FrontendController extends Controller
{

    public function trainerselect($id){
        $plan = Plan::find($id);
        $trainers = Trainer::all();
        return view('frontend.trainerselection',compact('trainers','plan'));
    }

    function trainer_details($planid,$trainerid){
        $trainer= Trainer::where('id',$trainerid)->first();
        $plan= Plan::where('id',$planid)->first();
        return view('frontend.trainerdetails',compact('trainer','plan'));

    }

    public function aboutus(){
        return view('frontend.aboutus');

    }

    public function payment($id){
        $enroll = Enroll::find($id);
        return view('frontend.payment',compact('enroll'));

    }

    public function enrollpage(){
        $enroll =  Enroll::where('user',Auth::user()->id)->get();
        return view('frontend.enrollpage',compact('enroll'));

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

    public function team(){
        return view('frontend.team');

    }

    public function feedback(){
        return view('frontend.feedback');

    }

    // public function enroll($id){
    //     $plan=Plan::find($id);
    //     return view('frontend.enrollform' ,compact('plan'));
    // }

    //Ecommerce part controller

    public function shop(){
        return view('frontend.shop');

    }

    public function shopsingle($id){
        $products=Products::find($id);
        return view('frontend.shopsingle', compact('products'));

    }

    // public function cart(){
    //     $cart_item = cart::where('user_id',Auth::user()->id)->get();
    //     return view('frontend.addtocart',compact('cart_item'));

    // } 


    public function cart(){
        if(Auth::check()){
            $user_id = Auth::user()->id;
            $cart_item= cart::where('user_id', $user_id)->where('status', false)->get();        
            $items = [];
            foreach($cart_item as $cart){
                $item = Products::where('id',$cart->product_id)->first();
                $item->totalprice = $cart->price;
                $items[] = $item;
            }
            $total_Amount = array_sum(array_column($items, 'totalprice'));
            return view('frontend.addtocart', compact('cart_item','total_Amount'));
        }else{
            return redirect()->route('login');
        }
    }


    public function addtocart(Request $request){

        
        $products_id = $request->product_id;

        $products=Products::where('id',$products_id)->first();

        $total_price = $products->price * $request->qty;

        $cart = new cart();
        $cart->user_id = Auth::user()->id;
        $cart->product_id = $products_id;
        $cart->quantity =  $request->qty;
        $cart->price = $total_price;
        $cart->save();
        return redirect()->route('shop')->with('success','item added successfully');
    } 


    public function checkout(Request $request){
        $total_Amount = $request->totalamt;
        $items = cart::where('user_id',Auth::user()->id)->where('status',false)->get();
        return view('frontend.checkout',compact('items','total_Amount'));

    } 


    public function thankyou(){
        // $products=Products::find($id);
        return view('frontend.thankyou');

    }



    function order(Request $request){
        
        $order = new Order();
        $order->country = $request->country;
        $order->provience = $request->provience;
        $order->firstname = $request->fname;
        $order->lastame = $request->lname;
        $order->address = $request->address;
        $order->city = $request->city;
        $order->ward = $request->ward;
        $order->Apartmentno = $request->appartment;
        $order->zip = $request->postal;
        $order->email = Auth::user()->id;
        $order->phone = $request->phone;
        $order->save();
        return redirect('thankyou');

        $cart_item = cart::where('user_id',Auth::user()->id)->where('status',false)->get();
        foreach($cart_item as $cart){
            $cart->order_id= $order->id;
            $cart->status= true;
            $cart->save();
        }
    }


//enroll
    function enroll(Request $request){

        $enroll = new Enroll();
        $enroll->plan = $request->plan_id;
        $enroll->trainer = $request->trainer_id;
        $enroll->user = Auth::user()->id;
        $enroll->status = 0;
        $enroll->name = Auth::user()->name;
        $enroll->save();
        return redirect('enrollpage');
    }

    function withouttreiner(Request $request){
        $enroll = new Enroll();
        $enroll ->plan = $request->planid;
        $enroll->user = Auth::user()->id;
        $enroll->name = Auth::user()->name;
        $enroll->status = 0;
        $enroll->save();
        return redirect('enrollpage');

    }
}
