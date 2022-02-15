<?php

namespace App\Http\creator;

use App\Http\Controllers\Controller;

use App\Models\User;
use App\Models\Words;
use Illuminate\Http\Request;
use RecursiveDirectoryIterator;
use RecursiveIteratorIterator;
use RecursiveRegexIterator;
use ReflectionClass;
use RegexIterator;
use Illuminate\Support\Facades\Route;


class UniversalController
{
    Associations
    public $model;
//    function __construct($model) {
//        $this->model=$model;
//    }
    function view()
    {
        return $this->model::all();
    }
    public function add()
    {
//        $hz = new User();
//        $ThisEndModel=substr(get_class($hz),strripos(get_class($hz),"\\")+1);

//        Route::post('/'.$ThisEndModel, [UniversalController::class, 'add']);
//        dd($ThisEndModel);

        $ThisEndRoute=substr(Route::current()->uri,strripos(Route::current()->uri,"/")+1);
        dump($ThisEndRoute);

        $iterator = new RecursiveIteratorIterator(new RecursiveDirectoryIterator("/CheckEnglishWords\\app\\Models"));
        $regex    = new RegexIterator($iterator, '/^.+\.php$/i', RecursiveRegexIterator::GET_MATCH);
//        dd($regex);
        foreach ($regex as $file => $value) {

            $temp=substr($file,strripos($file,"\\")+1);
            $ThisEndModel=substr($temp,0,strlen($temp)-4);
            $reflectionClass = new ReflectionClass($ThisEndModel);

            if($ThisEndRoute==$ThisEndModel){
                dump($file);
            }
        }
        die();
        //Получить список всех классов по конкретному namespace

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
