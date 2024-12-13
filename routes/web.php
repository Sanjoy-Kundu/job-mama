<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\UserController;
use App\Http\Controllers\DashboardController;
use App\Http\Controllers\JobCategoryController;
use App\Http\Controllers\JobSubcategoryController;

Route::get("/login", [UserController::class, "loginPage"])->name('login');
Route::post("/login-post", [UserController::class, "loginUser"]);

Route::get("/registration", [UserController::class, "registrationPage"])->name("registration");
Route::post("/registration-post", [UserController::class, "registrationUser"]);





Route::middleware(['role:job_seeker'])->group(function () {
    Route::get("/dashboard/seeker", [DashboardController::class, "seekerDashboard"]);
    Route::get('/logout', [DashboardController::class, "logout"]);
});

Route::middleware(['role:employer'])->group(function () {
    Route::get("/dashboard/employee", [DashboardController::class, "employeeDashboard"]);
    Route::get('/logout', [DashboardController::class, "logout"]);
});

Route::middleware(['auth','role:admin'])->group(function () {
    Route::get("/dashboard/admin", [DashboardController::class, "adminDashboard"]);
    Route::get('/logout', [DashboardController::class, "logout"]);

    Route::get("/dashboard/job/category", [JobCategoryController::class, "categoryPage"]);
    Route::get("/dashboard/job/category/lists", [JobCategoryController::class, "index"]);
    Route::post("/dashboard/job/category", [JobCategoryController::class, "create"]);

    Route::get("/dashboard/job/sub/category/lists", [JobSubcategoryController::class, "index"]);
    Route::post("/dashboard/job/sub/category", [JobSubcategoryController::class, "create"]);
    
});

