<?php

namespace App\Http\Controllers\Plan;

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
        $plan = new Plan();
        $data = compact( 'plan');
        return view('admin.plan.createplan')->with($data);
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
        return view('admin.plan.editplan', compact('plan'));
    }

    public function update(Request $request, $id)
    {
        $plan = Plan::find($id);
        $plan->planname=$request->planname;
        $plan->package=$request->package;
        $plan->price=$request->price;
        $plan->equipment=$request->equipment;
        $plan->admission=$request->admission;
        $plan->trainer=$request->trainer;
        $plan->update();

        return redirect('planview')->with('success', 'plan added successfully.');
    }
}
