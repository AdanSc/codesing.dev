<?php

use App\Http\Controllers\HomeController;;
use App\Http\Controllers\PostController;
use App\Http\Controllers\ServicesController;
use Illuminate\Support\Facades\Route;

Route::get('/', HomeController::class);
Route::get('/services', ServicesController::class);

Route::get('/proyects', [PostController::class, 'proyects']);
Route::get('/post/create', [PostController::class, 'create']);
Route::get('/post/{post}', [PostController::class, 'show']);
