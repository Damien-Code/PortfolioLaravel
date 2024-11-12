<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\PagemodelController;
use App\Http\Controllers\ProfileController;
use App\Http\Controllers\TestController;
use App\Http\Controllers\ContactController;

Route::get('/', [PagemodelController::class, 'index']);
Route::get('/test', [TestController::class, 'test']);
Route::get('/contact', [ContactController::class, 'contact']);
Route::get('/profile', [ProfileController::class, 'profile']);
