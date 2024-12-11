<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\UserController;

Route::get("/login", [UserController::class, "loginPage"])->name('login');
Route::get("/registration", [UserController::class, "registrationPage"])->name("registration");

Route::get('/logout', [UserController::class, "logout"])->middleware(["auth"]);
Route::post("/registration-post", [UserController::class, "registrationUser"]);
Route::post("/login-post", [UserController::class, "loginUser"]);


Route::get("/dashboard", [UserController::class, "seekerDashboard"])->middleware(['auth']);
Route::get("/dashboard", [UserController::class, "employeeDashboard"])->middleware(['auth']);

