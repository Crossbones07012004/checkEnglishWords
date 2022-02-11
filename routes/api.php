<?php

use App\Http\Controllers\AssociationsController;
use App\Http\Controllers\QuestSavesController;
use App\Http\Controllers\QuestsController;
use App\Http\Controllers\WordChecksController;
use App\Http\Controllers\WordsController;
use App\Http\creator\UniversalController;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;

Route::get('/words', [WordsController::class, 'view']);
Route::post('/words', [WordsController::class, 'addWord']);
Route::put('/words/{id}', [WordsController::class, 'putWord']);
Route::delete('/words/{id}', [WordsController::class, 'deleteWord']);

Route::get('/wordChecks', [WordChecksController::class, 'view']);
Route::post('/wordChecks', [WordChecksController::class, 'addWordCheck']);
Route::put('/wordChecks/{id}', [WordChecksController::class, 'putWordCheck']);
Route::delete('/wordChecks/{id}', [WordChecksController::class, 'deleteWordCheck']);


Route::get('/associations', [AssociationsController::class, 'view']);
Route::post('/associations', [AssociationsController::class, 'addAssociation']);
Route::put('/associations/{id}', [AssociationsController::class, 'putWord']);
Route::delete('/associations/{id}', [AssociationsController::class, 'deleteWord']);


Route::get('/quests', [QuestsController::class, 'view']);
Route::post('/quests', [QuestsController::class, 'addQuest']);
Route::put('/quests/{id}', [QuestsController::class, 'putQuest']);
Route::delete('/quests/{id}', [QuestsController::class, 'deleteQuest']);


Route::get('/questSaves', [QuestSavesController::class, 'view']);
Route::post('/questSaves', [QuestSavesController::class, 'addQuestSave']);
Route::put('/questSaves/{id}', [QuestSavesController::class, 'putQuestSave']);
Route::delete('/questSaves/{id}', [QuestSavesController::class, 'deleteQuestSave']);


