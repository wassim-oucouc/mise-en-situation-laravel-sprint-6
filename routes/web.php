<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\TeamController;
use App\Http\Controllers\PlayerController;

Route::get('/', function () {
    return view('welcome');
});



Route::get('/teams',[TeamController::class]);

Route::get('/players',[PlayerController::class,'GetAllplayers']);
