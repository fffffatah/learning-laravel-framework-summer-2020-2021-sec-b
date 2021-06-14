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

Route::get('/', function () {
    return view('welcome');
});

Route::get('/login', 'LoginController@index');
Route::post('/login', 'LoginController@verify');
Route::get('/logout', 'LogoutController@index');

Route::group(['middleware'=>['sess']] , function(){
	Route::get('/home', 'HomeController@index');
    Route::get('/user/list', 'UserController@index');
});

Route::group(['middleware'=>['sess','isadmin']] , function(){
	Route::get('/user/create', 'UserController@create');
    Route::post('/user/create', 'UserController@insert');
    Route::get('/user/details/{id}', 'UserController@details');

    Route::get('/user/edit/{id}', 'UserController@edit');
    Route::post('/user/edit/{id}', 'UserController@update');

    Route::get('/user/delete/{id}', 'UserController@delete');
    Route::post('/user/delete/{id}', 'UserController@destroy');
});


