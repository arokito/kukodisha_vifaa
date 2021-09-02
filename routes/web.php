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

Route::get('/', function () {
    return view('homepage');
});
Route::get('/dashboard', function () {
    return view('dashboard');
});
Route::get('/item-list', function () {
    return view('item-list');
});
Route::get('/rented-list', function () {
    return view('rented-list');
});
// Route::get('/add-item', function () {
//     return view('add-item');
// });
// Route::post('/create', [ItemController::class, 'uploadImage']);
Route::get('/add-category', function () {
    return view('add-category');
});
Route::get('/category-list', function () {
    return view('category-list');
});

Route::resource('items', 'ItemController');
Route::resource('categories', 'CategoryController');
Route::get('/login', function () {
    return view('login');
});
Route::get('/homepage', function () {
    return view('homepage');
});
Route::get('/view-more', function () {
    return view('view-more');
});
Route::get('/signup', function () {
    return view('signup');
});



