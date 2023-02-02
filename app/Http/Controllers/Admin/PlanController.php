<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Plan;
use Illuminate\Http\Request;

class PlanController extends Controller
{
    public function store(Request $request){
        $request->validate(
            [
                'planname' => 'required',
                'package'  => 'required',
                'price'    => 'required',
                'equipment'    => 'required',
                'admission'    => 'required',
                'trainer'    => 'required',

            ]
        );
        //insert query
        $plan=new Plan;
        $plan->planname=$request->planname;
        $plan->package=$request->package;
        $plan->price=$request->price;
        $plan->equipment=$request->equipment;
        $plan->admission=$request->admission;
        $plan->trainer=$request->trainer;
        $plan->save();
        return redirect('/planview');

    }
    //get method to show the createplan form
    public function create(){
        $url = url('/planview/create');
        $plan = new Plan();
        $title = "Enter details of Plan";
        $data = compact('url', 'title', 'plan');
        return view('admin.plan.create')->with($data);
    }

    //get method to view the added plan
    public function view(){
        return view('admin.plan.planview');
    }

    //get method to delete the plan
    public function delete($id)
    {
        $plan = Plan::find($id);
        if (!is_null($plan)) {
            $plan->delete();
        }
        return redirect('planview');
    }

    public function edit($id)
    {
        $plan = Plan::find($id);
        if (is_null($plan)) {
            return redirect('planview');
        } else {
            $title = "Update details of plan";
            $url = url('/planview/update') . "/" . $id;
            $data = compact('plan' , 'url' , 'title');
            return view('admin.plan.create')->with($data);
        }
    }

    public function update($id, Request  $request)
    {
        $plan = Plan::find($id);
        $plan->planname=$request->planname;
        $plan->package=$request->package;
        $plan->price=$request->price;
        $plan->equipment=$request->equipment;
        $plan->admission=$request->admission;
        $plan->trainer=$request->trainer;
        $plan->save();
        return redirect('/planview');
    }
}
