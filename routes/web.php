<?php

use App\Http\Controllers\CustomerController;
use App\Http\Controllers\StateController;
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

// customer route
Route::get('/customer/index',[CustomerController::class,'index']);
Route::post('/customer/insert',[CustomerController::class,'create']);
Route::get('/customer/edit/{id}',[CustomerController::class,'edit']);
Route::post('/customer/update/{id}',[CustomerController::class,'update']);
Route::get('/customer/delete/{id}',[CustomerController::class,'destroy']);


// state route
Route::get('/state/index',[StateController::class,'index']);
Route::post('/state/store',[StateController::class,'store']);
Route::get('/state/edit/{id}',[StateController::class,'edit']);