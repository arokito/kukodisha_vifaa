<?php

use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::get('/', 'ItemController@homePage');


Route::get('/dashboard', function () {
    return view('dashboard');
});

Route::get('/add-category', function () {
    return view('add-category');
});


Route::resource('items', 'ItemController');
Route::resource('categories', 'CategoryController');

Route::get('/login', function () {
    return view('login');
});




Route::get('/view-more', function () {
    return view('view-more');
});

Route::get('/signup', function () {
    return view('signup');
});



