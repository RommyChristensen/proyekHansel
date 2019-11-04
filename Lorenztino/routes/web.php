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
    return view('UserIndex.index');
});
Route::get('/Burger123', function () {
    return view('AdminLayout.loginAdmin');
});
Route::get('/Burger123/dashboard', 'AdminController@toDashboard');

Route::get('/Burger123/insertAttendance', 'AdminController@addAttendance');

Route::post('/Burger123/editAttendance', 'AdminController@editAttendance');
Route::post('/Burger123/addProses', 'AdminController@addProses');
Route::post('/Burger123/deleteProses', 'AdminController@deleteProses');
Route::post('/Burger123/editProses', 'AdminController@editProses');
Route::post('/insert/user', 'Register@insert');
Route::post('/Burger123/login', 'AdminController@login');
Route::get('/verify/{token}','Register@Verifikasi')->name('verify');
