<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\CategoryController;
use App\Http\Controllers\Sub_Category_maker;

Route::get('/', function () {
    return view('home');
})->name('home');

Route::get('/categories', function () {
    return view('categories');
})->name('categories');

Route::get('/login', function () {
    return view('login');
})->name('login');

Route::get('/register', function () {
    return view('register');
})->name('register');

Route::get('/single-blog', function () {
    return view('single-blog');
})->name('single-blog');

Route::get('/profile', function () {
    return view('profile');
})->name('profile');

Route::get('/dashboard', function () {
    return view('dashboard.dashboard');
})->name('dashboard');

Route::get('/category-create', function () {
    return view('dashboard.category-create');
})->name('category-create');

Route::post('/categories-store',
 [Sub_Category_maker::class, 'store']
//  function () {
//      dd(request()->all());
//  }
 )->name('sub_categories.store');

Route::get('/category-list', function () {
    return view('dashboard.category-list');
})->name('category-list');

// Route::get('/all-posts', function () {
//     return view('dashboard.all-posts');
// })->name('all-post');
