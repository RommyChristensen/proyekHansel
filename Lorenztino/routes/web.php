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
    // return view('UserIndex.home');
    return view('UserIndex.newHome');
});

// Route::get('/tes', function () {
//     return view('UserIndex.newHome');
// });

Route::get('/cek', function () {
    return view('UserIndex.successRegister');
});

Route::get('/Burger123', function () {
    return view('AdminLayout.loginAdmin');
});
Route::get('/Burger123/dashboard', 'AdminController@toDashboard');

Route::get('/Burger123/insertAttendance', 'AdminController@addAttendance');
Route::get('/Burger123/verifiedAttendance', 'AdminController@verifiedAttendance');

Route::post('/Burger123/acceptVerified', 'AdminController@acceptVerified');
Route::post('/Burger123/rejectVerified', 'AdminController@rejectVerified');
Route::post('/Burger123/editAttendance', 'AdminController@editAttendance');
Route::post('/Burger123/addProses', 'AdminController@addProses');
Route::post('/Burger123/deleteProses', 'AdminController@deleteProses');
Route::post('/Burger123/editProses', 'AdminController@editProses');
Route::post('/insert/user', 'Register@insert');
Route::post('/Burger123/login', 'AdminController@login');
Route::get('/verify/{token}','Register@Verifikasi')->name('verify');
