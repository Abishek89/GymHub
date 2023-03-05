<?php

namespace App\Http\Controllers;

use App\Models\Customer;
use App\Models\Plan;
use App\Models\Trainer;
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
               if(Auth::user()->verified==false){
                   return view('frontend.formtrainer');
               }  
               else{
                   
               return route('trainerdashboard');

               }
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

     

        // $request->validate(
        //     [
        //         'name' => 'required',
        //         'image' => 'required',
        //         'DOB'  => 'required',
        //         'gender'    => 'required',
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




    function enrolltrainer(Request $request){

        $trainer = new Trainer();
        $trainer-> name = $request-> name;
        $trainer-> image = $request-> image;
        $trainer-> DOB = $request-> birthday;
        $trainer-> gender= $request-> gender;
        $trainer-> height= $request-> height;
        $trainer-> weight = $request-> weight;
        $trainer-> email= Auth::user()->email;
        $trainer-> phone= $request-> phone;
        $trainer->userid = $request->user_id;
        $trainer->save();

        $user= User::where('id',Auth::user()->id)->first();
        $user->verified= true;

        return redirect()->route('trainerdashboard');

    }
}
