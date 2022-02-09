<?php

use App\Http\Controllers\AssociationsController;
use App\Http\Controllers\WordsController;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;

Route::get('/words', [WordsController::class, 'view']);
Route::post('/words', [WordsController::class, 'addWord']);
Route::put('/words/{id}', [WordsController::class, 'putWord']);
Route::delete('/words/{id}', [WordsController::class, 'deleteWord']);
Route::get('/associations', [AssociationsController::class, 'view']);
Route::post('/associations', [AssociationsController::class, 'addAssociation']);
Route::put('/associations/{id}', [AssociationsController::class, 'putWord']);
//Route::delete('/associations/{id}', [AssociationsController::class, 'deleteWord']);
