<?php

namespace App\Http\Controllers;

use App\Models\Chat;
use App\Models\Message;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class ChatController extends Controller
{
        public function chatpost(Request $request){  

        $request->validate([
            'message' => 'required|string|max:1000',
        ]);

        $chat = new Chat();
        $chat->user_id = Auth::user()->id;
        $chat->message = $request->message;
        $chat->save();

        return redirect()->route('chat')->with('success', 'Messaggio inviato ');
    }
    
 
}
