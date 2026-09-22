<?php

use App\Http\Controllers\Auth\LoginController;
use Illuminate\Support\Facades\Route;

Route::get('/', [LoginController::class, 'index'])->name('login');
Route::post('/login', [LoginController::class, 'login'])->name('store');

Route::get('/chat', function () {
    return view('chat');
})->name('chat')->middleware('auth');

Route::get('/group-chat', function () {
    return view('group-chat');
});
