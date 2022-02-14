<?php

namespace App\Http\creator;

use App\Http\Controllers\Controller;

use App\Models\Words;
use Illuminate\Http\Request;

class UniversalController
{
    public $model;
    function __construct($model) {
        $this->model=$model;
    }
    function view()
    {
        return $this->model::all();
    }
    public function add()
    {
        //Получить список всех классов по конкретному namespace
        dd(get_declared_classes());
        $word = new (get_class($this->model));
//        foreach (array_keys($word->getOriginal()) as &$value) {
//            if(isset($request[$value])){
//                dump($word[$value]);
//            }
//
//        }
//        dump($word->getAttributes());
//        die();
//        $word->eng = $request["eng"];
//        $word->rus = $request["rus"];
//        $word->save();
        return $word;
    }
//    function put()
//    {
//
//    }
//    function delete()
//    {
//
//    }
}
