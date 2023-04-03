<?php

namespace App\Http\Controllers\Trainerdashboard;

use App\Http\Controllers\Controller;
use App\Models\Customer;
use App\Models\dietplans;
use App\Models\Enroll;
use App\Models\Trainer;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;

class TrainerdashController extends Controller
{
    function profileupdate(Request $request){
        $id = $request->id;
        $user = User::find($id);
        $trainer = Trainer::where('userid',$id)->first();

        if($request->image != ""){
            $file = $request->file('image');
            
            $extenstion = $file->getClientOriginalExtension();
            $filename = time().'.'.$extenstion;
            $file->move('uploads/trainers/', $filename);
            $trainer->image = $filename;

            $trainer->name = $request->name;
            $trainer->height = $request->height;
            $trainer->weight = $request->weight;
            $trainer->email = $request->email;
            $trainer->phone = $request->phone;
            $trainer->save();
    
            $user->name = $request->name;
            $user->email = $request->email;
            $user->save();
        }else{
            $trainer->name = $request->name;
            $trainer->height = $request->height;
            $trainer->weight = $request->weight;
            $trainer->email = $request->email;
            $trainer->phone = $request->phone;
            $trainer->save();
    
            $user->name = $request->name;
            $user->email = $request->email;
            $user->save();
        }
        return redirect()->back();

    }

    public function updatepass(Request $request)
    {
        $request->validate([
            'current_password' => 'required',
            // 'password' => 'required|confirmed|min:8|regex:/^(?=.*[a-z])(?=.*[A-Z])(?=.*\d)(?=.*(\W|_)).+$/',
        ]);
        
        $user = Auth::user();
        $currentPassword = $request->input('current_password');
        $newPassword = $request->input('password');
        
        // Verify the current password before updating
        if (!Hash::check($currentPassword, $user->password)) {
            return back()->withErrors(['current_password' => 'The current password is incorrect.']);
        }
        
        $user->update([
            'password' => Hash::make($newPassword),
        ]);
        
        return redirect()->back()->with('success', 'Your password has been updated successfully.');
    }

    public function trainerprofile(){
        
        return view('trainer.trainerprofile.profileview');
    }

    public function profileedit(){
        
        return view('trainer.trainerprofile.profileedit');
    }

    public function trainerpass(){
        
        return view('trainer.trainerprofile.trainerpass');
    }

    public function trainerdashboard(){
        
        return view('trainer.trainer');
    }

    public function member(){
        $id = Auth::user()->id;
        $trainer = Trainer::where('userid',$id)->first();
        $enroll = Enroll::where('trainer',$trainer->id)->where('admin',true)->get();
        return view('trainer.member',compact('enroll'));
    }

    public function active(){

        $trainer= Trainer::where('userid',Auth::user()->id)->first();
        $enroll = Enroll::where('trainer',$trainer->id)->where('status',1)->where('admin',true)->get();
        return view('trainer.active',compact('enroll'));
    }

    public function inactive(){
        
        $trainer= Trainer::where('userid',Auth::user()->id)->first();
        $enroll = Enroll::where('trainer',$trainer->id)->where('status',2)->where('admin',true)->get();
        return view('trainer.inactive',compact('enroll'));
    }

    public function enquiry(){
        $trainer= Trainer::where('userid',Auth::user()->id)->first();
        $enroll = Enroll::where('trainer',$trainer->id)->where('status',0)->where('admin',true)->get();
        return view('trainer.enquiry',compact('enroll'));
    }

    function adddiet(Request $request){

        
        $trainer = Trainer::where('userid',Auth::user()->id)->first();
        $diet = new dietplans();
        $diet->userid = $request->user_id;
        $diet->trainerid = $trainer->id;
        $diet->meal1= $request->meal1;
        $diet->meal2= $request->meal2;
        $diet->meal3= $request->meal3;
        $diet->meal4= $request->meal4;
        $diet->meal5= $request->meal5;
        $diet->meal6= $request->meal6;
        $diet->save();
    }
}
