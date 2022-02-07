<?php

use App\Http\Controllers\WordsController;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| API Routes
|--------------------------------------------------------------------------
|
| Here is where you can register API routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| is assigned the "api" middleware group. Enjoy building your API!
|
*/

Route::get('/words', [WordsController::class, 'view']);
Route::post('/words', [WordsController::class, 'addWord']);
Route::put('/words/{id}', [WordsController::class, 'putWord']);
Route::delete('/words/{id}', [WordsController::class, 'deleteWord']);
