<?php

use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('home');
});
Route::get('/categories', function () {
    return view('categories')->name('categories');
});
Route::get('/login', function () {
    return view('login')->name('login');
});
Route::get('/register', function () {
    return view('register')->name('register');
});
Route::get('/single-blog', function () {
    return view('single-blog')->name('single-blog');
});
Route::get('/profile', function () {
    return view('profile')->name('profile');
});
Route::get('/dashboard', function () {
    return view('dashboard.dashboard');
});