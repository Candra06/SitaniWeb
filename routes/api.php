<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| API Routes
|--------------------------------------------------------------------------
|
| Here is where you can register API routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| is assigned the "api" middleware group. Enjoy building your API!
|
*/

Route::post('login', 'API\UserController@login');
Route::post('forgotPassword', 'API\UserController@forgotPass');
Route::post('requestPass/{id}', 'API\UserController@requestPass');
Route::post('register', 'API\UserController@register');

Route::group(['middleware' => 'auth:api'], function(){
    Route::post('details', 'API\UserController@show');
    Route::post('update', 'API\UserController@update');
    Route::get('penyakit', 'API\PenyakitController@index');
    Route::get('penyakit/{penyakit}', 'API\PenyakitController@show');
    Route::get('penyakit/penanggulangan/{penanganan}', 'API\PenyakitController@penanganan');
    Route::get('pupuk', 'API\PupukController@index');
    Route::get('pupuk/{pupuk}', 'API\PupukController@show');
    Route::get('artikel', 'API\ArtikelController@index');
    Route::get('cabai', 'API\CabaiController@index');
    Route::get('artikel/{artikel}', 'API\ArtikelController@show');
    Route::post('addLahan', 'API\LahanController@store');
    Route::post('addPanen', 'API\PanenController@store');
    Route::put('update/{id}', 'API\LahanController@update');
    Route::get('getLahan', 'API\LahanController@index');
    Route::get('gejala/{id}', 'API\GejalaController@index');
    Route::get('detailLahan/{id}', 'API\LahanController@show');
});
