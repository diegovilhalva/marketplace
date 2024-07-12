<?php

use App\Http\Controllers\backend\AdminController;
use App\Http\Controllers\backend\ProfileController;
use App\Http\Controllers\backend\SliderController;
use Illuminate\Support\Facades\Route;

Route::get('admin/dashboard',[AdminController::class,'dashboard'])->middleware(['auth','admin'])->name('admin.dashboard');

Route::get('admin/profile',[ProfileController::class,'index'])->middleware(['auth','admin'])->name('admin.profile');


Route::post('admin/profile/update',[ProfileController::class,'update'])->middleware(['auth','admin'])->name('admin.profile.update');

Route::post('admin/profile/update/password',[ProfileController::class,'updatePassword'])->middleware(['auth','admin'])->name('admin.profile.password');


Route::resource('admin/slider',SliderController::class)->middleware(['auth','admin']);