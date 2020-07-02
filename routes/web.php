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
//Yang asli
Route::get('/well', function () {
    return view('welcome');
});

//Form registrasi sign in
//tugas laravel 1
Route::get('/Home', 'HomeController@home');

Route::get('/register', 'AuthController@register');

Route::get('/welcome', 'AuthController@welcome');

//templating blade
Route::get('/master', function() {
    return view('layoutadm.master');
});

Route::get('/', function() {
    return view('templatingblade.table');
});

Route::get('/data-tables', function() {
    return view('templatingblade.data-table');
});