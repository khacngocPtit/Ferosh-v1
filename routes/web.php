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
   Route::get('/tk_master', function () {
        return view('pages.tk_master');
    })->name('tk_master');

<<<<<<< HEAD
   Route::get('/bst_master', function () {
        return view('pages.bst_master');
    })->name('bst_master');
    Route::get('/sp_master', function () {
        return view('pages.sp_master');
    })->name('sp_master');
 
  Route::get('/dl-dn_master', function () {
        return view('pages.dl-dn_master');
    })->name('dl-dn_master');
  
   Route::get('/dk_master', function () {
        return view('pages.dk_master');
    })->name('dk_master');
=======
Route::get('/', function () {
    return view('trang-chu');
});

Route::get('/trang-chu', function () {
    return view('trang-chu');
});
>>>>>>> bd754e7151bd8324d3a108b5803c5fcdcddabcdf
