<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| API Routes
|--------------------------------------------------------------------------
|
| Here is where you can register API routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| is assigned the "api" middleware group. Enjoy building your API!
|
*/

Route::group(['prefix' => 'size'], function () {
   Route::get('', [\App\Http\Controllers\SizeController::class, 'all']);
   Route::get('{id}', [\App\Http\Controllers\SizeController::class, 'get']);
   Route::post('', [\App\Http\Controllers\SizeController::class, 'create']);
   Route::put('{id}', [\App\Http\Controllers\SizeController::class, 'update']);
   Route::delete('{id}', [\App\Http\Controllers\SizeController::class, 'delete']);
});

Route::group(['prefix' => 'brand'], function () {
    Route::get('', [\App\Http\Controllers\BrandController::class, 'all']);
    Route::get('{id}', [\App\Http\Controllers\BrandController::class, 'get']);
    Route::post('', [\App\Http\Controllers\BrandController::class, 'create']);
    Route::put('{id}', [\App\Http\Controllers\BrandController::class, 'update']);
    Route::delete('{id}', [\App\Http\Controllers\BrandController::class, 'delete']);
});
