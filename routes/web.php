<?php

use App\Http\Controllers\RegisteredController;
use App\Http\Controllers\JobController;
use Illuminate\Support\Facades\Route;

Route::view('/', 'home');

Route::resource('jobs', JobController::class);

Route::get('/register', [RegisteredController::class, 'create']);

Route::view('/contact', 'contact');