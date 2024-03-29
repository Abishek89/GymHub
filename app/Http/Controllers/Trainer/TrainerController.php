<?php

namespace App\Http\Controllers\Trainer;

use App\Http\Controllers\Controller;
use App\Models\Customer;
use App\Models\Enroll;
use App\Models\Trainer;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;

class TrainerController extends Controller
{

    // public function store(Request $request){
    //     $trainer=new Trainer();
    //     $tariner->trainername=$request->trainername;
    //     if($request->hasfile('image'))
    //     {
    //         $file = $request->file('image');
    //         $extenstion = $file->getClientOriginalExtension();
    //         $filename = time().'.'.$extenstion;
    //         $file->move('uploads/trainers/', $filename);
    //         $trainer->image = $filename;
    //     }
    //     $trainer->facebook=$request->facebook;
    //     $trainer->instagram=$request->instagram;
    //     $trainer->twitter=$request->twitter;
    //     $trainer->save();
    //     return redirect('viewtrainers')->with('flash_message','Trainer Data Uploaded Successfully');
    // }



    public function store(Request $request){
        $trainer = new User();
        $trainer->name = $request->trainername;
        $trainer->email = $request->email;
        $trainer->role = 2;
        $trainer->password=Hash::make($request->password);
        $trainer->save();
        return redirect('viewtrainers')->with('success','Trainer added successfully');

    }

    public function add(){
        $trainer=Trainer::all();
        return view('admin.trainer.addtrainers');
    }

    //get method to view the added plan
    public function view(){
        return view('admin.trainer.viewtrainers');
    }

     //get method to delete the trainer profile
    //  public function delete($id)
    //  {
    //      $trainer = Trainer::find($id);
    //      if (!is_null($trainer)) {
    //          $trainer->delete();
    //      }
    //      return redirect('viewtrainers');
    //  }
 
    //method to edit the trainer profile
    //  public function edit($id)
    //  {
    //      $trainer = Trainer::find($id);
    //      return view('admin.trainer.edittrainer', compact('trainer'));
    //  }

    //  //method to update the trainer profile
    //  public function update(Request $request, $id)
    //  {
    //      $trainer = Trainer::find($id);
    //      $trainer->trainername=$request->trainername;
    //      if($request->hasfile('image'))
    //     {
    //         $file = $request->file('image');
    //         $extenstion = $file->getClientOriginalExtension();
    //         $filename = time().'.'.$extenstion;
    //         $file->move('uploads/trainers/', $filename);
    //         $trainer->image = $filename;
    //     }
    //      $trainer->facebook=$request->facebook;
    //      $trainer->instagram=$request->instagram;
    //      $trainer->twitter=$request->twitter;
    //      $trainer->update();
 
    //      return redirect('viewtrainers')->with('success', 'Trainer added successfully.');
    //  }

    public function approve(Request $request){
        $id = $request->enroll_id;
        $enroll = Enroll::find($id);

        $enroll->status=1;
        $enroll->save();
        return redirect()->back()->with('success','Enroll approved successfully');
    }
    public function reject(Request $request){
        $id = $request->enroll_id;
        $enroll = Enroll::find($id);

        $enroll->status=2;
        $enroll->save();
        return redirect()->back()->with('success','Enroll approved successfully');
    }


    public function dietplan($id){
        $enroll = Enroll::find($id);
        $customer = Customer::where('userid',$enroll->user)->first();
        $trainer = trainer::where('id',$enroll->trainer)->first();
        return view('trainer.dietplan',compact('customer','trainer'));
    }

}

