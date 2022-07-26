<?php

use App\Http\Controllers\siteController;
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
Route::get('/',[siteController::class,'showHome']);
Route::get('/about',[siteController::class,'showAbout']);
Route::get('/service',[siteController::class,'showService']);
Route::get('/portfolio',[siteController::class,'showportFolio']);



