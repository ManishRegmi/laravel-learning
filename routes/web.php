<?php

use App\Http\Controllers\FrontendController;
use App\Http\Controllers\LoginController;
use App\Http\Controllers\MoviesController;
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

// fornt routes
Route::get('/',[FrontendController::class,'index']);

// login routes
Route::get('/login',[LoginController::class,'login']);
Route::post('/check-creadentials',[LoginController::class,'checkCredentials']);


// movies routess
Route::get('/movies-index',[MoviesController::class,'movies']);
Route::post('/create-movie',[MoviesController::class,'create']);
Route::get('/movie-description/{id}',[FrontendController::class,'movieDescription']);