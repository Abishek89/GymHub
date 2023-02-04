<?php

namespace App\Http\Controllers\Product;

use App\Http\Controllers\Controller;
use App\Models\Products;
use Illuminate\Http\Request;

class ProductController extends Controller
{
    public function store(Request $request){
        $products=new Products();
        $products->productname=$request->productname;
        if($request->hasfile('image'))
        {
            $file = $request->file('image');
            $extenstion = $file->getClientOriginalExtension();
            $filename = time().'.'.$extenstion;
            $file->move('uploads/products/', $filename);
            $products->image = $filename;
        }
        $products->price=$request->price;
        $products->quantity=$request->quantity;
        $products->description=$request->description;
        $products->save();
        return redirect('viewproduct');
    }

    public function create(){
        $products=Products::all();
        return view('admin.product.addproduct');
    }

    //get method to view the added plan
     public function view(){
        return view('admin.product.viewproduct');
    }
}
