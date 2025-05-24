<?php

namespace App\Http\Controllers;

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
        return view ('chat');   
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
        'image' => 'nullable|image|max:2048', // max 2MB
    ]);

    $post = new Post();
    $post->title = $request->title;
    $post->content = $request->content;

    // Salvataggio immagine (se presente)
    if ($request->hasFile('image')) {
        $path = $request->file('image')->store('uploads', 'public');
        $post->image = $path; // salva solo il percorso relativo
    }

    $post->save();

    return redirect()->route('forum')->with('success', 'Post creato con successo');
    }   
    
    
    public function details(Post $post){
    
            $post->load(['messages' => function ($query) {
        $query->latest(); // equivale a ->orderBy('created_at', 'desc')
    }]);
        return view('details', compact('post'));
    }

}









