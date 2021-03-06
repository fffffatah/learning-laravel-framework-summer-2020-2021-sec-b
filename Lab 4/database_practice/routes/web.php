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
    return view('login.index');
});
Route::get('/login', ['as'=>'login.index', 'uses'=>'LoginController@index']);
Route::post('/login', ['as'=>'login.verify', 'uses'=>'LoginController@verify']);

Route::group(['middleware'=>['sess']], function(){
    Route::get('/dashboard', ['as'=>'dashboard.index', 'uses'=>'DashboardController@index']);
});

Route::resource('/user', 'UserController');