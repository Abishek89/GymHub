<?php

namespace App\Http\Controllers;

use App\Models\Chat;
use App\Models\Discussion;
use GuzzleHttp\Psr7\Message;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class chatconroller extends Controller
{
    function discussion(){
        return view('frontend.discussion.discuss');
    }
    

    public function chat(){
        $discussions=Discussion::where('Admin',Auth::user()->id)->get();
        
        return view('admin.chatdiscuss.chat', compact('discussions'));
    }


    public function selectchat($id){
        $discussions=Discussion::where('Admin',Auth::user()->id)->get();
        $selected_chat = Discussion::find($id);
        $chat = Chat::where('discussion_id',$id)->get();
        return view('admin.chatdiscuss.chat', compact('discussions','selected_chat','chat'));

    }
    function storechat(Request $requset){
         
        $message = new Chat();
        $message->sender_id = Auth::user()->id;
        $message->discussion_id = $requset->selected_chat;
        $message->message = $requset->chat;
        $message->save();
        return redirect()->back();
    }
}
