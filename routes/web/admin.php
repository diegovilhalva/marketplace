<?php

use App\Http\Controllers\backend\AdminController;
use App\Http\Controllers\backend\ProfileController;
use Illuminate\Support\Facades\Route;

Route::get('admin/dashboard',[AdminController::class,'dashboard'])->middleware(['auth','admin'])->name('admin.dashboard');

Route::get('admin/profile',[ProfileController::class,'index'])->name('admin.profile');
Route::post('admin/profile/update',[ProfileController::class,'update'])->name('admin.profile.update');
