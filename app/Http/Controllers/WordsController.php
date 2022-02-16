<?php

namespace App\Http\Controllers;

use App\Http\creator\UniversalController;
use App\Models\Words;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;

class WordsController extends UniversalController
{
    public $model = Words::class;

//    public function view()
//    {
//        return Words::all();
//    }
//
//    public function addWord(Request $request)
//    {
//        $word = new Words;
//        $word->eng = $request["eng"];
//        $word->rus = $request["rus"];
//        $word->save();
//        return $word;
//
//    }
//    public function putWord(Request $request, $id)
//    {
//        $word =Words::find($id);
////
//        if($request["eng"]!=""){
//            $word->eng = $request["eng"];
//        }
//        if($request["rus"]!=""){
//            $word->rus = $request["rus"];
//        }
//        $word->save();
//        return $word;
//    }
//    public function deleteWord($id)
//    {
//        $word =Words::find($id);
//        $word->delete();
//        return $word;
//    }
}
