<?php

use App\Models\User;
use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome');
});



Route::get('/profile', function () {
    $user = user::first();
    return view('profile', compact('user'));
});

// Route::get('/', function(){
//     return view('welcom', ['nama' => 'Rizky',
//     'npm' => '123456789']);
// });