<?php

use App\Http\Controllers\AuthController;
use App\Http\Controllers\ProfileController;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;

Route::controller(AuthController::class)
    ->group(function () {
       Route::post('/register', 'register');
       Route::post('/login', 'login');
       Route::delete('/logout', 'logout')->middleware('auth:api');
       Route::post('/refresh', 'refresh')->middleware('auth:api');
    });

Route::controller(ProfileController::class)
    ->prefix('/me')
    ->middleware('auth:api')
    ->group(function () {
        Route::get('/', 'index');
        Route::put('/', 'update');
        Route::put('/password', 'updatePassword');
        Route::delete('/', 'destroy');
    });
