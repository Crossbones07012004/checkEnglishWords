<?php

namespace App\Http\Controllers;

use App\Http\creator\VAPDSampleController;
use App\Models\Stuff;

class StuffController extends VAPDSampleController
{
    public $model = Stuff::class;
}
