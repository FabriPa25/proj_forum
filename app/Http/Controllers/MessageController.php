<?php

namespace App\Http\Controllers;

use App\Models\Message;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class MessageController extends Controller
{
public function messagepost(Request $request, $id)
{
    $request->validate([
        'message' => 'required|string|max:1000',
    ]);

    $message = new Message;
    $message->message = $request->message;
    $message->post_id = $id; 
     $message->user_id = Auth::id(); 
    $message->save();



    return back()->with('success', 'Commento Publicato');
}


  

}
