<?php

namespace App\Http\Controllers;

use App\Http\creator\VAPDSampleController;
use App\Models\Words;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;

class WordsController extends VAPDSampleController
{
    public $model = Words::class;

}
