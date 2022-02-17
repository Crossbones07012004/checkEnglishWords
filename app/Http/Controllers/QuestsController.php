<?php

namespace App\Http\Controllers;

use App\Http\creator\VAPDSampleController;
use App\Models\Quest_saves;
use App\Models\Quests;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;

class QuestsController extends VAPDSampleController
{
    public $model = Quests::class;
}
