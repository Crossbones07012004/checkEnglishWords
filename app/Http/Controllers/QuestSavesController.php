<?php

namespace App\Http\Controllers;

use App\Http\creator\VAPDSampleController;
use App\Models\Quest_saves;
use App\Models\Quests;
use App\Models\Words;
use Illuminate\Http\Request;

class QuestSavesController extends VAPDSampleController
{
    public $model = Quest_saves::class;
}
