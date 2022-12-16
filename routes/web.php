<?php

use App\Http\Controllers\CustomerController;
use App\Http\Controllers\InvoiceController;
use App\Http\Controllers\ItemController;
use App\Http\Controllers\StateController;
use App\Models\Invoice;
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

// item
Route::get('/item/index',[ItemController::class,'index']);
Route::post('/item/store',[ItemController::class,'store']);
Route::get('/item/edit/{id}',[ItemController::class,'edit']);
Route::post('/item/update/{id}',[ItemController::class,'update']);
Route::get('/item/delete/{id}',[ItemController::class,'destroy']);


// invoice
Route::get('/invoice/index',[InvoiceController::class,'index']);
Route::POST('/invoice/store',[InvoiceController::class,'create']);
Route::get('/invoice/edit/{id}',[InvoiceController::class,'edit']);
Route::post('/invoice/update/{id}',[InvoiceController::class,'update']);
Route::get('/invoice/delete/{id}',[InvoiceController::class,'destroy']);

Route::get('/invoice/print/{id}', [InvoiceController::class,'print']);


Route::get('/show-data/{id}',[InvoiceController::class,'showme']);
