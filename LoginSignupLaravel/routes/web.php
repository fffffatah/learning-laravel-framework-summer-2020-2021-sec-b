<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\LoginController;
use App\Http\Controllers\SignupController;

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

Route::get('/login', [LoginController::class, 'index']);
Route::get('/signup', [SignupController::class, 'index']);

Route::post('/login', [LoginController::class, 'validate']);
Route::post('/signup', [SignupController::class, 'validate']);

//Route::get('/login', 'LoginController@index');
//Route::get('/signup', 'SignupController@index');