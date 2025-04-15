<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ItemController;
use App\Http\Controllers\UserController;
use App\Http\Controllers\ProfileController;


Route::middleware('auth')->group(function () {
         Route::get('/', [ItemController::class, 'index']);
     });
Route::post('/register', [UserController::class, 'register']);
Route::post('/login', [UserController::class, 'login']);
Route::get('/mypage', [ProfileController::class, 'index'])->name('profile');


