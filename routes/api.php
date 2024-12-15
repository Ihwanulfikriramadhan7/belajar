<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\AnimalController;
use Illuminate\Support\Facades\Redis;
use App\Http\Controllers\StaffController;
use App\Http\Controllers\Api\AuthController;

Route::get('/user', function (Request $request) {
    return $request->user();
})->middleware('auth:sanctum');

// personal






Route::post("/register", [AuthController::class, "register"]);
Route::post("/login", [AuthController::class, "login"]);



Route::get('/animal', [AnimalController::class,'index']);
Route::post('/animal', [AnimalController::class,'store']);

Route::get('/staff', [StaffController::class,'apiStaff']);