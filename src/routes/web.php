<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ItemController;
use App\Http\Controllers\UserController;
use App\Http\Controllers\ProfileController;


Route::middleware('auth')->group(function () {
         Route::get('/', [ItemController::class, 'index']);
     });
Route::get('/profile_settings', [ProfileController::class, 'index'])->name('profile');
Route::get('/item/:item_id/{id}', [ItemController::class, 'detail'])->name('detail');

