<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\UserController;

Route::get("/login", [UserController::class, "loginPage"])->name('login');
Route::get("/registration", [UserController::class, "registrationPage"])->name("registration");

Route::get('/logout', [UserController::class, "logout"])->middleware(["auth"]);
Route::post("/registration-post", [UserController::class, "registrationUser"]);
Route::post("/login-post", [UserController::class, "loginUser"]);



//Route::get("/dashboard", [UserController::class, "employeeDashboard"])->middleware(['auth']);

Route::middleware(['auth', 'role:job_seeker'])->group(function () {
    Route::get("/dashboard/seeker", [UserController::class, "seekerDashboard"]);
});

Route::middleware(['auth', 'role:employer'])->group(function () {
    Route::get("/dashboard/employee", [UserController::class, "employeeDashboard"]);
});

Route::middleware(['auth', 'role:admin'])->group(function () {
    Route::get("/dashboard/admin", [UserController::class, "adminDashboard"]);
});

