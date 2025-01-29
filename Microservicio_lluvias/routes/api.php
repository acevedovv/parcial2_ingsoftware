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
    Route::get('/rains', [UserController::class, 'index']);
    Route::post('/rains', [UserController::class, 'store']);
    Route::get('/rains/{id}', [UserController::class, 'show']);
    Route::put('/rains/{id}', [UserController::class, 'update']);
    Route::delete('/rains/{id}', [UserController::class, 'destroy']);

});
