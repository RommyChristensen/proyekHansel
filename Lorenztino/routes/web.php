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

Route::post('/insert/user', 'Register@insert');
Route::post('/Burger123/login', 'AdminController@login');
