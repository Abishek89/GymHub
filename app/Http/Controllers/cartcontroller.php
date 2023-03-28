<?php

namespace App\Http\Controllers;

use App\Models\cart;
use App\Models\Order;
use App\Models\Products;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class cartcontroller extends Controller
{
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

    function update(Request $request){
        $id = $request->id;
        $cart = cart::find($id);
        $products = Products::where('id',$cart->product_id)->first();
        $amt=$products->price * $request->qty;
        $cart->quantity = $request->qty;
        $cart->price= $amt;
        $cart->save();
        return redirect()->back();
    }


    function delete(Request $request){
        $id = $request->id;
        $cart = cart::find($id);
        $cart->delete();
        return redirect()->back();
    }


function usersitem($id){
    $order = Order::find($id);
    $item = cart::where('order_id',$id)->get();
    return view('frontend.orderdetails.orderitem',compact('item','order'));
}

function adminorderitem($id){
    $order = Order::find($id);
    $item = cart::where('order_id',$id)->get();
    return view('admin.orderdetails.orderitems',compact('item','order'));
}

function ship(Request $request){

    $id = $request->id;
    $order = Order::find($id);
    $order->status = 2;
    $order->save();
    return redirect()->route('admin.orderdetails');

}

}
