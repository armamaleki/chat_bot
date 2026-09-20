<?php

use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('login');
});

Route::get('/chat', function () {
    return view('chat');
});

Route::get('/group-chat', function () {
    return view('group-chat');
});
