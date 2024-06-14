<?php

use App\Http\Controllers\ProfileController;
use App\Http\Controllers\StudentController;
use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome');
});

Route::get('/students', [StudentController::class,'index'])->name('students');
Route::get('/students/store', [StudentController::class,'store'])->name('store');

Route::get('/student/profile/store' , [ProfileController::class,'store'])->name('profile.store');
Route::get('/student/profile/index' , [ProfileController::class,'index'])->name('profile.index');