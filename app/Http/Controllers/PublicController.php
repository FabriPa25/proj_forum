<?php

namespace App\Http\Controllers;

use App\Models\Chat;
use App\Models\Post;
use Illuminate\Http\Request;

class PublicController extends Controller
{
    public function home(){
        return view ('welcome');
    }

    public function forum(){
        $posts = Post::all();
        return view ('forum', compact('posts'));
    }

    public function chat( ){
        $chats = Chat::all();
        return view ('chat', compact('chats'));   
    }


    public function control_panel(){
          $posts =  post::all();
        return view ('control_panel', compact('posts'));
    }

                // vista pagina profilo

    public function profilo(){
    return view('profilo');
    }


                // gestisce la richiesta post da pagina profilo

    public function profilopost(Request $request){

    $request->validate([
        'title' => 'required|string|max:255',
        'content' => 'required|string',
        'image' => 'nullable|image|max:2048',
    ]);

    $post = new Post();
    $post->title = $request->title;
    $post->content = $request->content;

 
    if ($request->hasFile('image')) {
        $path = $request->file('image')->store('uploads', 'public');
        $post->image = $path; 
    }

    $post->save();

    return redirect()->route('forum')->with('success', 'Post creato con successo');
    }   
    
    
    public function details(Post $post){
            
        $post->load(['messages' => function ($query) {
        $query->latest(); 
    }]);
        return view('details', compact('post'));
    }

}









