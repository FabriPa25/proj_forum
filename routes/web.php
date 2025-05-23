<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\PublicController;


Route::get('/', [PublicController::class, 'home'])->name('welcome');
Route::get('/forum', [PublicController::class, 'forum'])->name('forum');
Route::get('/chat', [PublicController::class, 'chat'])->name('chat');

