<?php

namespace App\Http\Controllers;

use App\Http\creator\VAPDSampleController;
use App\Models\Word_checks;
use Illuminate\Http\Request;

class WordChecksController extends VAPDSampleController
{

    public $model = Word_checks::class;

}
