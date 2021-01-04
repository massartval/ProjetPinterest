<?php

use App\Http\Controllers\ClientController;
use App\Http\Controllers\FactureController;
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

Route::get('/', [ProfileController::class, 'index']);

////PROFILE////

Route::get('/login', [ProfileController::class, 'login']);

Route::get('/register', [ProfileController::class, 'register']);

Route::get('/profile/{id}', [ProfileController::class, 'profile']);

//IMAGES//

Route::get('/image/{id}',[ImagesController::class,'image']);

Route::post('/image/create',[ImagesController::class,'store']);

Route::patch('/image/edit/{id}',[ImagesController::class,'update']);

Route::delete('/image/delete/{id}',[ImagesController::class,'destroy']);

