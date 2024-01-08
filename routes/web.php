<?php

use App\Http\Controllers\ProfileController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\TestController;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/

Route::get('/',[TestController::class,'index']);

Route::get('/about',[TestController::class,'about']);

Route::get('/services',[TestController::class,'service']);

Route::get('/project',[TestController::class,'project']);

Route::get('/contact',[TestController::class,'contact']);

Route::get('/blog',[TestController::class,'blog']);

Route::get('/login',[TestController::class,'login']);