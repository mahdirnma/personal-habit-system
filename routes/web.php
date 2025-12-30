<?php

use App\Http\Controllers\AuthController;
use App\Http\Controllers\HabitCheckinController;
use App\Http\Controllers\HabitController;
use App\Http\Controllers\UserController;
use Illuminate\Support\Facades\Route;

Route::get('/login',[AuthController::class,'loginForm'])->name('login.form');
Route::post('/login',[AuthController::class,'login'])->name('login');
Route::get('/register',[AuthController::class,'registerForm'])->name('register.form');
Route::post('/register',[AuthController::class,'register'])->name('register');

Route::middleware('auth')->group(function(){
    Route::get('/',[UserController::class,'index'])->name('dashboard');
    Route::resource('habits', HabitController::class);
    Route::resource('checkins', HabitCheckinController::class)->only(['index']);

    Route::get('/habit/{habit}/status',[HabitController::class,'statusForm'])->name('habit.status.form');
    Route::post('/habit/{habit}/status',[HabitController::class,'status'])->name('habit.status');

    Route::post('/logout',[AuthController::class,'logout'])->name('logout');
});
