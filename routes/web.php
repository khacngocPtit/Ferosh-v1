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
    return view('pages.index');
});
Route::get('/colection', function () {
    return view('pages.colection');
});
Route::get('/chi-tiet-san-pham', function () {
    return view('pages.chitietsanpham');
});
Route::get('/san-pham', function () {
    return view('pages.sanpham');
});

