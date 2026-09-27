<?php

use App\Http\Controllers\Auth\LoginController;
use Illuminate\Support\Facades\Route;

Route::get('/', [LoginController::class, 'index'])->name('login');


Route::get('/chat', function () {
    $userId = request('u');
    $conversation = \App\Models\Conversation::whereHas('users', function ($query) {
        $query->where('users.id', auth()->id());
    })
        ->whereHas('users', function ($query) use ($userId) {
            $query->where('users.id', $userId);
        })
        ->first();
    $messages = $conversation
        ? $conversation->messages()->with('user')->oldest()->get()
        : collect();
    return view('chat', compact('messages'));
})->name('chat')->middleware('auth');


Route::post('/login', [LoginController::class, 'login'])->name('store');
Route::get('/group-chat', function () {
    return view('group-chat');
});


