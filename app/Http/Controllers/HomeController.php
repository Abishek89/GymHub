<?php

namespace App\Http\Controllers;

use App\Models\Customer;
use App\Models\Plan;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class HomeController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('auth');
    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */
    public function index()
    {
       if(Auth::user()->role==0)
       {
           return view('admin.admindashboard');
        }
           elseif(Auth::user()->role==2)
           {    
               return view('trainer.trainer');
           }
       else{
           if(Auth::user()->verified==false)
           {
           return view('frontend.enrollform');
        }
           else{
            // $plan=Plan::all();
            return view('frontend.index');
           }

    }}

    public function enrolldata(Request $request){
        // echo "<pre>";
        // print_r($request->all());
        // $request->validate(
        //     [
        //         'name' => 'required',
        //         'image' => 'required',
        //         'DOB'  => 'required',
        //         'gender'    => 'required',
        //         'age'    => 'required',
        //         'height'    => 'required',
        //         'weight'    => 'required',
        //         'email'    => 'required',
        //         'phone'    => 'required',


        //     ]
        // );

        $customers = new Customer();
        $customers->userid = Auth::user()->id;
        $customers->name=$request->name;
        $customers->image=$request->image;
        $customers->DOB=$request->birthday;
        $customers->gender=$request->gender;
        $customers->age=$request->Age;
        $customers->height=$request->height;
        $customers->weight=$request->weight;
        $customers->email=$request->email;
        $customers->phone=$request->phone;
        $customers->save();

        $user=User::where('id',Auth::user()->id)->first();
        $user->verified=true;
        $user->save();
        
        return view('frontend.index');


       

    } 
}
