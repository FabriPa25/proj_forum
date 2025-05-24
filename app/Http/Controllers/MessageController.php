<?php

namespace App\Http\Controllers;

use App\Models\Message;
use Illuminate\Http\Request;

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
    $message->save();



    return back()->with('success', 'Messaggio inviato con successo');
}


  

}
