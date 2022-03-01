<?php

namespace App\Http\Controllers;

use App\Http\creator\VAPDSampleController;
use App\Models\UserStuffs;
use Illuminate\Http\Request;

class UserStuffsController extends VAPDSampleController
{
    public $model = UserStuffs::class;
}
