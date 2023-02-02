<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Products;
use Illuminate\Http\Request;

class ProductController extends Controller
{
    public function addproduct(Request $request){
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
        $products->image=$request->image;
        $products->description=$request->description;
        $products->save();
        return redirect()->back();
    }
}
