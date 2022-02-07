<?php

namespace App\Http\Controllers;

use App\Models\Words;
use Illuminate\Http\Request;


class Person
{
    public $name, $age;

    function hello()
    {
        echo "Hello!<br>";
    }
}
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
        return "post";

    }
    public function putWord(Request $request, $id)
    {
        $word =Words::find($id);
        $word->eng = $request["eng"];
        $word->rus = $request["rus"];
        $word->save();
        return "put";
    }
    public function deleteWord($id)
    {
        $word =Words::find($id);
        $word->delete();
        return "delete";
    }
}
