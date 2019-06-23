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
    return view('page.index');
});

Route::get('/dashboard', function () {
    return view('admin.index');
});

Route::get('/admin/login', function () {
    return view('admin.login');
});

Route::get('/admin/register', function () {
    return view('admin.register');
});

Route::get('/admin/forgot-password', function () {
    return view('admin.forgot-password');
});
