<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ChatController;
use App\Http\Controllers\PublicController;
use App\Http\Controllers\MessageController;



Route::get('/', [PublicController::class, 'home'])->name('welcome');
Route::get('/forum', [PublicController::class, 'forum'])->name('forum');
Route::get('/chat', [PublicController::class, 'chat'])->name('chat');

Route::get('/profilo', [PublicController::class, 'profilo'])->name('profilo');
Route::post('/profilo', [PublicController::class, 'profilopost'])->name('profilo.post');


Route::get('/details/{post}', [PublicController::class, 'details'])->name('details');

// message

Route::post('/message/{id}', [MessageController::class, 'messagepost'])->name('message.post');

// Chat

Route::post('/chat', [ChatController::class, 'chatpost'])->name('chat.post');








