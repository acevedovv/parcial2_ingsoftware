<?php

use App\Models\City;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\CityController;
use App\Http\Controllers\RainController;

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

Route::middleware('filter')->get('/fires', function (Request $request) {
    Route::get('/fires', [UserController::class, 'index']);
    Route::post('/fires', [UserController::class, 'store']);
    Route::get('/fires/{id}', [UserController::class, 'show']);
    Route::put('/fires/{id}', [UserController::class, 'update']);
    Route::delete('/fires/{id}', [UserController::class, 'destroy']);
});
