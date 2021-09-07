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

Route::get('profile/change_password', 'Profile@changePassword');
Route::get('profile/view_profile', 'Profile@viewProfile');

Route::resource('items', 'ItemController');
Route::resource('categories', 'CategoryController');
Route::resource('users', 'UserController');

Route::get('apis/sms', 'SMSController@smsIndex');

Route::post('/storeSMSCredentials', 'SMSController@store');
Route::get('/checkout' , 'PesaController@index');
Route::post('/pesapalIframe', 'PesaController@pesaPalIframe');



Route::get('/login', function () {
    return view('login');
});




Route::get('/view-more', function () {
    return view('view-more');
});

Route::get('/signup', function () {
    return view('signup');
});



