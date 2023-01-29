<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Plan;
use Illuminate\Http\Request;

class PlanController extends Controller
{
    public function createplan(Request $request){
        $plan=new Plan;
        $plan->planname=$request->planname;
        $plan->package=$request->package;
        $plan->price=$request->price;
        $plan->equipment=$request->equipment;
        $plan->admission=$request->admission;
        $plan->trainer=$request->trainer;
        $plan->save();
        return redirect()->back();

    }
}
