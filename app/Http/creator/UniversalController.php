<?php

namespace App\Http\creator;

use App\Http\Controllers\Controller;
use App\Models\Words;
use Doctrine\Inflector\Rules\Word;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
use RecursiveDirectoryIterator;
use RecursiveIteratorIterator;
use RecursiveRegexIterator;
use ReflectionClass;
use RegexIterator;


class UniversalController extends Controller
{
    public $model;

    function view()
    {
        return $this->model::all();
    }
//
    public function add1()
    {
          echo "jofs";
//        $hz = new User();
//        $ThisEndModel=substr(get_class($hz),strripos(get_class($hz),"\\")+1);

//        Route::post('/'.$ThisEndModel, [UniversalController::class, 'add']);
//        dd($ThisEndModel);

        $thisEndRoute=substr(Route::current()->uri,strripos(Route::current()->uri,"/")+1);
        dump($thisEndRoute);

        $iterator = new RecursiveIteratorIterator(new RecursiveDirectoryIterator("/CheckEnglishWords\\app\\Models"));
        $regex    = new RegexIterator($iterator, '/^.+\.php$/i', RecursiveRegexIterator::GET_MATCH);
//        dd($regex);
        foreach ($regex as $file => $value) {

            $temp=substr($file,strripos($file,"\\")+1);
            $thisEndModel=substr($temp,0,strlen($temp)-4);
            dd($thisEndModel);
            $reflectionClass = new ReflectionClass($thisEndModel);
            if($thisEndRoute==$thisEndModel){
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
    public function add(Request $request)
    {
        $word = $this->model::create($this->model::validatedData($request));

        return $word;
    }

    public function putWord(Request $request, $id)
    {
        $word =$this->model::find($id);

        $word->fill($this->model::validatedData($request));

        $word->save();

        return $word;
    }

    public function deleteWord($id)
    {
        $word =$this->model::find($id);

        $word->delete();

        return $word;
    }
}
