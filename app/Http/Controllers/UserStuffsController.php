<?php

namespace App\Http\Controllers;


use App\Http\creator\VAPDSampleController;
use App\Models\UserStuffs;

class UserStuffsController extends VAPDSampleController
{
    public $model = UserStuffs::class;
}
