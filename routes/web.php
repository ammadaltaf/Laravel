<?php

use Illuminate\Support\Facades\Route;
use App\Http\Middleware\isAdminMiddleware;
use App\Http\Controllers\PostServiceController;
use App\Http\Controllers\PostController;
use App\Http\Controllers\StudentController;
use App\Http\Controllers\ContactController;
use App\Http\Controllers\BookController;
use App\Http\Controllers\UserController;
Route::get('/', function () {
    return view('welcome');
})->middleware(isAdminMiddleware::class);

Route::get('post',[PostServiceController::class,'index']);
Route::get('post/{id}',[PostServiceController::class,'SinglePost']);

Route::resource('student', StudentController::class);
Route::resource('contact', ContactController::class);
Route::resource('book', BookController::class);
Route::resource('user', UserController::class);
Route::resource('pst', PostController::class);
