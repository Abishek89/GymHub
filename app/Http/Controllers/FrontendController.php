<?php

namespace App\Http\Controllers;

use App\Models\cart;
use App\Models\Customer;
use App\Models\Order;
use App\Models\Plan;
use App\Models\Products;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

use function GuzzleHttp\Promise\all;

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

    public function team(){
        return view('frontend.team');

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
        return redirect()->back()->with('success','item added successfully');


       

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

        $cart_item = cart::where('user_id',Auth::user()->id)->where('status',false)->get();
        foreach($cart_item as $cart){
            $cart->order_id= $order->id;
            $cart->status= true;
            $cart->save();
        }
    }
}
