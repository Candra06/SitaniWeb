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
});
