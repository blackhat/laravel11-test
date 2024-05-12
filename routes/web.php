<?php

use App\Http\Controllers\HomeController;
use Illuminate\Support\Facades\Route;

Route::get('/', [HomeController::class, 'index']);

// http://laravel11-app.test/about
Route::get('/about', [HomeController::class, 'about']);
