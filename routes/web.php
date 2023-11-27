<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers;
use App\Http\Controllers\FeedbackControllers;

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
Route::prefix('/')->group(function (){
    Route::get('crypto' , [Controllers\CryptoController::class , 'crypto']);
    Route::get('crypto/create' , [App\Http\Controllers\CryptoController::class , 'getCrypto']);
});

Route::prefix('/')->group(function () {
    Route::get('currency' , [\App\Http\Controllers\CurrencyController:: class , 'index']);
    Route::get('/currency/store' , [\App\Http\Controllers\CurrencyController:: class , 'store']);
    Route::post('/currency/create' , [App\Http\Controllers\CurrencyController::class , 'create']);
});

Route::prefix('/')->group(function () {
    Route::get('feedback' , [App\Http\Controllers\FeedbackControllers::class , 'message']);
    Route::get('/feedback/list' , [FeedbackControllers::class, 'getMessage']);
});
