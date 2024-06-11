<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\RatingController;
use App\Http\Controllers\AuthController;

Route::get('/user', function (Request $request) {
    return $request->user();
})->middleware('auth:sanctum');



Route::post('login', [AuthController::class, 'login']);

Route::post('register', [AuthController::class, 'register']);


Route::apiResource('books', 'BookController');

Route::post('books/{book}/ratings', [RatingController::class, 'store']);