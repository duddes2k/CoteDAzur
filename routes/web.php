<?php

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
    return view('home');
});

Route::get('/rental/yacht', function () {
    return view('yacht');
});

Route::get('/rental/car', function () {
    return view('car');
});

Route::get('/rental/speedboat', function () {
    return view('boat');
});


Route::get('/aboutus', function () {
    return view('about');
});

//Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');
Route::post('/reservation', 'ReservationController@index')->name('reservation');
Route::post('/reservation/send', 'ReservationController@sendMail')->name('reservation.sendmail');
