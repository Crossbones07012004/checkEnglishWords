<?php

namespace App\Http\creator;

use App\Exceptions\UserNotFoundException;
use App\Http\Controllers\Controller;
use App\Models\Words;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
use RecursiveDirectoryIterator;
use RecursiveIteratorIterator;
use RecursiveRegexIterator;
use ReflectionClass;
use RegexIterator;


class VAPDSampleController extends Controller
{
    public $model;

    public function get()
    {
        return $this->model::all();
    }
    public function getById($id)
    {
        return $this->model::find($id);
    }
    public function post(Request $request)
    {
        try{
            $object = $this->model::create($this->model::validatedData($request));
        }
        catch (ModelNotFoundException  $e){
            throw new UserNotFoundException();
        }



        return $object;
    }
    function put(Request $request,$id)
    {
        $object =$this->model::find($id);

        $object->fill($this->model::validatedData($request));

        $object->save();

        return $object;
    }
    function delete($id)
    {
        $object =$this->model::find($id);

        $object->delete();

        return $object;
    }

}
