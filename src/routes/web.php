<?php

use App\Http\Controllers\ProfileController;
use App\Http\Controllers\ImagesController;
/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
 */

Route::get('/', [ImagesController::class, 'index']);

////PROFILE////

/* Route::get('/login', [ProfileController::class, 'login']);

Route::get('/register', [ProfileController::class, 'register']);

Route::get('/profile/{id}', [ProfileController::class, 'profile']); */

//IMAGES//

Route::get('/', [ImagesController::class, 'index']);


Route::middleware(['auth:sanctum', 'verified'])->get('/image/create',[ImagesController::class,'create']);

Route::get('/image/{id}',[ImagesController::class,'info']);

Route::middleware(['auth:sanctum', 'verified'])->post('/image/create',[ImagesController::class,'uploadFile'])->name('upload.uploadFile');

Route::post('/image/search',[ImagesController::class,'search'])->name('search');


//PROFILE


Route::middleware(['auth:sanctum', 'verified'])->get('/profile/{id}', [ProfileController::class, 'profile']);

Route::middleware(['auth:sanctum', 'verified'])->get('/profile/{id}/settings', [ProfileController::class, 'edit']);

Route::middleware(['auth:sanctum', 'verified'])->patch('/profile/{id}/settings', [ProfileController::class, 'update']);

Route::middleware(['auth:sanctum', 'verified'])->post('/share/{id}',[ProfileController::class,'share']);

Route::middleware(['auth:sanctum', 'verified'])->post('/unshare/{id}',[ProfileController::class,'unshare']);

