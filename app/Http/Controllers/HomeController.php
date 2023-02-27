<?php

namespace App\Http\Controllers;

use App\Models\Plan;
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
            $plan=Plan::all();
            return view('frontend.index', compact('plan'));
           }

    }}
}
