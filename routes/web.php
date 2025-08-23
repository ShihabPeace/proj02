<?php

use App\Http\Controllers\dashboard\dashboard;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\dashboard\ArticleMaker;
use App\Http\Controllers\dashboard\CategoryMaker;
use App\Http\Controllers\dashboard\SubCategoryMaker;

Route::get('/', [dashboard::class,'home'])->name('home');

Route::get('/categories', function () {
    return view('categories');
})->name('categories');

Route::get('/login', function () {
    return view('login');
})->name('login');

Route::get('/register', function () {
    return view('register');
})->name('register');


Route::get('/profile', function () {
    return view('profile');
})->name('profile');

Route::get('/dashboard', function () {
    return view('dashboard.dashboard');
})->name('dashboard');

Route::get('/categories-view', [CategoryMaker::class, 'show'])->name('category.view');
Route::post('/category-create', [CategoryMaker::class, 'store'])->name('categories.store');

Route::get('/subcategories-view', [SubCategoryMaker::class, 'show'] )->name('subcategory.view');
Route::post('/subcategory-create', [SubCategoryMaker::class, 'store'])->name('subcategories.store');

Route::get('/articles-view', [ArticleMaker::class, 'show'])->name('article.view');
Route::post('/article-create', [ArticleMaker::class, 'store'])->name('article.store');

Route::view('/dashboard', 'dashboard.dashboard')->name('dashboard');

Route::get('/categories-list', [dashboard::class, 'index'])->name('categorylist.view');
Route::get('/articles-list', [dashboard::class, 'articleIndex'])->name('article.list.view');

Route::get('/single-blog/{article:slug}', [ArticleMaker::class, 'show_article'])->name('single-blog');