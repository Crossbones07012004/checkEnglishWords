<?php

namespace App\Http\Controllers;

use App\Http\creator\VAPDSampleController;
use App\Models\User;
use App\Models\UserStuffs;
use Illuminate\Http\Request;

class UsersController extends VAPDSampleController
{
    public $model = User::class;
}
