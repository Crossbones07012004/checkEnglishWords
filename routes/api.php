<?php

use App\Http\Controllers\AssociationsController;
use App\Http\Controllers\QuestSavesController;
use App\Http\Controllers\QuestsController;
use App\Http\Controllers\WordChecksController;
use App\Http\Controllers\WordsController;
use Illuminate\Support\Facades\Route;


Route::get('/words', [WordsController::class, 'view']);
Route::post('/words', [WordsController::class, 'add']);
Route::put('/words/{id}', [WordsController::class, 'put']);
Route::delete('/words/{id}', [WordsController::class, 'delete']);

Route::get('/wordChecks', [WordChecksController::class, 'view']);
Route::post('/wordChecks', [WordChecksController::class, 'add']);
Route::put('/wordChecks/{id}', [WordChecksController::class, 'put']);
Route::delete('/wordChecks/{id}', [WordChecksController::class, 'delete']);

Route::get('/associations', [AssociationsController::class, 'view']);
Route::post('/associations', [AssociationsController::class, 'add']);
Route::put('/associations/{id}', [AssociationsController::class, 'put']);
Route::delete('/associations/{id}', [AssociationsController::class, 'delete']);

Route::get('/quests', [QuestsController::class, 'view']);
Route::post('/quests', [QuestsController::class, 'add']);
Route::put('/quests/{id}', [QuestsController::class, 'put']);
Route::delete('/quests/{id}', [QuestsController::class, 'delete']);

Route::get('/questSaves', [QuestSavesController::class, 'view']);
Route::post('/questSaves', [QuestSavesController::class, 'add']);
Route::put('/questSaves/{id}', [QuestSavesController::class, 'put']);
Route::delete('/questSaves/{id}', [QuestSavesController::class, 'delete']);


//
//$hz=new UniversalController(new Words);
//Route::post('/Words', [UniversalController::class, 'add1']);


