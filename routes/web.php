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

/*
|---------------------------------------------
| Admin Routes
|---------------------------------------------
*/

Route::name('admin.login')->get('/admin/login', 'Auth\LoginController@showLoginForm');

Route::name('admin.logout')->get('/admin/logout', 'Auth\LoginController@logout');

Route::name('admin.bookings')->get('/admin/bookings', 'Admin\AdminController@index');

Route::name('admin')->get('/admin', 'Admin\AdminController@index');

Route::name('admin.inquiries')->get('/admin/inquiries', function() {
    return view('admin.inquiry');
});

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

Route::get('/thankyou', function () {
    return view('thankyou');
});

//Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');
Route::post('/reservation', 'ReservationController@index')->name('reservation');
Route::post('/reservation/send', 'ReservationController@mailInquery')->name('reservation.sendmail');

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');
