<?php

use App\Http\Controllers\RegisteredController;
use App\Http\Controllers\SessionController;
use App\Http\Controllers\JobController;
use Illuminate\Support\Facades\Route;

Route::view('/', 'home');
Route::view('/contact', 'contact');

Route::resource('jobs', JobController::class);

Route::get('/register', [RegisteredController::class, 'create']);
Route::post('/register', [RegisteredController::class, 'store']);

Route::get('/login', [SessionController::class, 'create']);
Route::post('/login', [SessionController::class, 'store']);