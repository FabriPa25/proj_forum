<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ChatController;
use App\Http\Controllers\UserController;
use App\Http\Controllers\PublicController;
use App\Http\Controllers\MessageController;



Route::get('/', [PublicController::class, 'home'])->name('welcome');
Route::get('/forum', [PublicController::class, 'forum'])->name('forum');
Route::get('/chat', [PublicController::class, 'chat'])->middleware('auth')->name('chat');
Route::get('/control_panel', [PublicController::class, 'control_panel'])->name('control_panel');
Route::get('/profilo', [PublicController::class, 'profilo'])->name('profilo');
Route::post('/profilo', [PublicController::class, 'profilopost'])->name('profilo.post');


Route::get('/details/{post}', [PublicController::class, 'details'])->name('details');

// message

Route::post('/message/{id}', [MessageController::class, 'messagepost'])->name('message.post');

// Chat

Route::post('/chat', [ChatController::class, 'chatpost'])->name('chat.post');


// modifica utente pannello di controllo

Route::put('/control_panel/{id}', [UserController::class, 'update'])->name('user.update');

// Eliminare account da pannello di controllo

Route::delete('/control_panel/{id}', [UserController::class, 'destroy'])->name('user.destroy');








