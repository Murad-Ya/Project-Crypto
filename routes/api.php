<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| API Routes
|--------------------------------------------------------------------------
|
| Here is where you can register API routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "api" middleware group. Make something great!
|
*/

Route::middleware('auth:sanctum')->get('/user', function (Request $request) {
    return $request->user();
});
Route::prefix('feedback')->group(function () {
    Route::post('/feedback/create', [\App\Http\Controllers\FeedbackControllers::class, 'message']);
    Route::post('/feedback/list', [\App\Http\Controllers\FeedbackControllers::class, 'getMessage']);
});

Route::prefix('/')->group(function () {
    Route::post('/currency/create', [\App\Http\Controllers\CurrencyController::class, 'store']);
    Route::post('/currency/list', [\App\Http\Controllers\CurrencyController:: class, 'create']);
});
