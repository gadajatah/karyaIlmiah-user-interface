<?php


// Route::get('/', function () {
//     return view('welcome');
// });

use App\Http\Controllers\HomeController;

Route::get('/', 'HomeController@index');
Route::get('/enkripsi', 'HomeController@enkripsi');
Route::get('/deskripsi', 'HomeController@deskripsi');