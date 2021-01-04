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

Route::get('/', function () {
    return view('welcome');
});

////CLIENT////

Route::get('/clients', [ClientController::class, 'index']);

Route::get('/client/create', [ClientController::class, 'create']);

Route::post('/client/create',[ClientController::class,'store']);

Route::get('/client/edit/{id}',[ClientController::class,'edit']);

Route::patch('/client/edit/{id}',[ClientController::class,'update']);

Route::delete('/client/delete/{id}',[ClientController::class,'destroy']);

////Facture/////

Route::get('/factures', [FactureController::class, 'index']);

Route::get('/restaurant/show/{id}', [FactureController::class, 'show']);

Route::get('/facture/create', [FactureController::class, 'create']);

Route::post('/facture/create',[FactureController::class,'store']);

Route::get('/facture/edit/{id}',[FactureController::class,'edit']);

Route::patch('/facture/edit/{id}',[FactureController::class,'update']);

Route::delete('/facture/delete/{id}',[FactureController::class,'destroy']);
