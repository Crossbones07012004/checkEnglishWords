<?php

namespace App\Http\creator;

use App\Http\Controllers\Controller;
use App\Models\Word_checks;
use Illuminate\Http\Request;

class UniversalController
{

    public $controller;
    public function adder(Request $request)
    {
        call_user_func()
        dd(this->$controller);
        $class = new ReflectionClass(this->$controller->getName());

        $wordCheck = new Word_checks;
        $wordCheck->password=$request["wordId"];
        $wordCheck->elementsJson=$request["marksNumber"];

        $wordCheck->save();
        return $wordCheck;
    }
    function puter()
    {

    }
}
