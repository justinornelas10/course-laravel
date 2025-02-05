<?php

use App\Http\Controllers\Api\AuthenticationController;
use App\Http\Controllers\Api\CategoryController;
use App\Http\Controllers\Api\PostController;
use App\Models\Category;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;

Route::get('/user', function (Request $request) {
    return $request->user();
})->middleware('auth:api');



Route::post('register', [AuthenticationController::class, 'register'])->name('register');
Route::post('login', [AuthenticationController::class, 'login'])->name('login');

Route::middleware(['auth:api'])->group(function () {
    Route::get('post/all', [PostController::class, 'all']);
    Route::get('category/all', [CategoryController::class, 'all']);
    Route::get('post/all', [PostController::class, 'all']);
    Route::get('post/slug/{post:slug}', [PostController::class, 'slug']);
    Route::get('category/all', [CategoryController::class, 'all']);
    Route::get('category/{category}/posts', [CategoryController::class, 'posts']);
    Route::get('category/slug/{slug}', [CategoryController::class, 'slug']);


    // Route::resource('category', CategoryController::class)->except(["create","edit"]);
    // Route::resource('post', PostController::class)->except(["create","edit"]);
});



