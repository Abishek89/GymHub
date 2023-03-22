<?php

namespace App\Http\Controllers;

use App\Models\Customer;
use App\Models\Enroll;
use Illuminate\Http\Request;

class AdminController extends Controller
{

    public function dashboard(){
        
        return view('admin.admindashboard');
    }



    public function active(){
        $enroll=Enroll::where('admin',true)->get();
        return view('admin.activemembers',compact('enroll'));
    }

    public function inactive(){
        $enroll=Enroll::all();
        return view('admin.inactivemembers',compact('enroll'));
    }

    public function members(Request $request){
        $search = $request->search;
        if($search != ""){
            $enroll = Enroll::where('name','Like',"%$search%")->get();
        }else{
            $enroll=Enroll::where('admin',true)->get();
        }            
        return view('admin.members',compact('enroll'));

        
        // return view('admin.members',compact('enroll'));
    }

    public function enquiry(){
        $enroll = Enroll::where('admin',false)->get();
        
        return view('admin.enquiry',compact('enroll'));
    }


    public function approve(Request $request){
        $id = $request->enroll_id;
        $enroll = Enroll::find($id);

        $enroll->admin=true;
        $enroll->save();
        return redirect()->back()->with('success','Enroll approved successfully');
    }


    public function reject(Request $request){
        $id = $request->enroll_id;
        $enroll = Enroll::find($id);

        $enroll->delete();
        return redirect()->back()->with('success','Enroll approved successfully');
    }
}
