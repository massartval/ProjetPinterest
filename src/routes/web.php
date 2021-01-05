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

//Route::get('/image/{id}',[ImagesController::class,'image']);

Route::get('/image/create',[ImagesController::class,'create']);

Route::get('/image/{id}',[ImagesController::class,'info']);

Route::post('/image/create',[ImagesController::class,'uploadFile'])->name('upload.uploadFile');

Route::post('/image/search',[ImagesController::class,'search'])->name('search');

//Route::patch('/image/edit/{id}',[ImagesController::class,'update']);

//Route::delete('/image/delete/{id}',[ImagesController::class,'destroy']);

Route::middleware(['auth:sanctum', 'verified'])->get('/profile/{id}', [ProfileController::class, 'profile']);

Route::middleware(['auth:sanctum', 'verified'])->get('/dashboard', function () {
    return view('dashboard');
})->name('dashboard');

