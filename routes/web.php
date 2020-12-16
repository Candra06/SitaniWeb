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

Route::get('/', 'UserController@home');
Route::post('/login', 'UserController@login');

Route::group(['middleware' => 'CheckAdmin'], function () {
    Route::get('/logout', 'UserController@logout');
    Route::get('/dashboard', 'UserController@dashboard');
    Route::resource('user', 'UserController');
    Route::resource('penyakit', 'PenyakitController');
    Route::resource('pupuk', 'PupukController');
    Route::resource('cabai', 'CabaiController');
    Route::resource('artikel', 'ArtikelController');
    Route::resource('gejala', 'GejalaController');
});
