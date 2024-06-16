<?php

use App\Http\Controllers\CommentController;
use App\Http\Controllers\ProductController;
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

Route::get('/student/comments/store' , [CommentController::class,'store'])->name('comments.store');
Route::get('/student/comments/index' , [CommentController::class,'index'])->name('comments.index');

Route::get('/api/products', [ProductController::class, 'index']);
Route::get('/api/products/create', [ProductController::class, 'create']);
