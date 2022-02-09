<?php

namespace App\Http\Controllers;

use App\Models\Words;
use Illuminate\Http\Request;

class WordsController extends Controller
{
    public function view()
    {
        return Words::all();
    }
    public function addWord(Request $request)
    {
        $word = new Words;
        $word->eng = $request["eng"];
        $word->rus = $request["rus"];
        $word->save();
        return $word;

    }
    public function putWord(Request $request, $id)
    {
        $word =Words::find($id);
        if($request["eng"]!=""){
            $word->eng = $request["eng"];
        }
        if($request["rus"]!=""){
            $word->eng = $request["rus"];
        }
        $word->save();
        return $word;
    }
    public function deleteWord($id)
    {
        $word =Words::find($id);
        $word->delete();
        return $word;
    }
}
