<?php

use Illuminate\Support\Facades\Route;

// Auth

// Auth::routes();
Route::get('/auth/login', [App\Http\Controllers\CompanyProfileController::class, 'login'])->name('login');

// Juara Security Company Profile Pages

Route::get('/', [App\Http\Controllers\CompanyProfileController::class, 'home'])->name('home');
Route::get('/about-us', [App\Http\Controllers\CompanyProfileController::class, 'about'])->name('about');

// LMS Profile Pages

Route::get('/lms', [App\Http\Controllers\LmsController::class, 'home'])->name('lms');

// Dashboard User

Route::get('/lms/dashboard', [App\Http\Controllers\DashboardUserController::class, 'home'])->name('dasboard_user');

// Dashboard Admin

Route::get('/dashboard-admin', [App\Http\Controllers\DashboardAdminController::class, 'index'])->name('dashboard_admin');