<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\backend\VendorController;

Route::get('vendor/dashboard',[VendorController::class,'dashboard'])->middleware(['auth','vendor'])->name('vendor.dashboard');
