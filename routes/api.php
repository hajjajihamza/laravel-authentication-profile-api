<?php

use App\Http\Controllers\AuthController;
use App\Http\Controllers\ProfileController;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;

Route::get('/user', function (Request $request) {
    return $request->user();
})->middleware('auth:sanctum');

Route::controller(AuthController::class)
    ->group(function () {
       Route::post('/register', 'register');
       Route::post('/login', 'login');
       Route::delete('/logout', 'logout')->middleware('auth:sanctum');
    });

Route::controller(ProfileController::class)
    ->prefix('/me')
    ->middleware('auth:sanctum')
    ->group(function () {
        Route::get('/', 'index');
        Route::put('/', 'update');
        Route::put('/password', 'updatePassword');
        Route::delete('/', 'destroy');
    });
