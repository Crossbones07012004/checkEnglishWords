<?php

use App\Http\Controllers\AssociationsController;
use App\Http\Controllers\QuestSavesController;
use App\Http\Controllers\QuestsController;
use App\Http\Controllers\StuffController;
use App\Http\Controllers\WordChecksController;
use App\Http\Controllers\WordsController;
use Illuminate\Support\Facades\Route;
use \App\Http\creator\VAPDSampleCreator;
use \App\Http\Controllers\UserStuffsController;
use \App\Http\Controllers\UserController;

VAPDSampleCreator::create("words", WordsController::class);

VAPDSampleCreator::create("wordChecks", WordChecksController::class);

VAPDSampleCreator::create("associations", AssociationsController::class);

VAPDSampleCreator::create("quests", QuestsController::class);

VAPDSampleCreator::create("questSaves", QuestSavesController::class);

VAPDSampleCreator::create("stuffs", StuffController::class);

VAPDSampleCreator::create("userStuffs", UserStuffsController::class);

VAPDSampleCreator::create("users", UserController::class);

