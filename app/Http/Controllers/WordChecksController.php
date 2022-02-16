<?php

namespace App\Http\Controllers;

use App\Http\creator\UniversalController;
use App\Models\Word_checks;
use Illuminate\Http\Request;

class WordChecksController extends UniversalController
{

    public $model = Word_checks::class;

//    public function view()
//    {
//
//        return Word_checks::all();
//    }
//    public function addWordCheck(Request $request)
//    {
//        $wordCheck = new Word_checks;
//        $wordCheck->password=$request["wordId"];
//        $wordCheck->elementsJson=$request["marksNumber"];
//
//        $wordCheck->save();
//        return $wordCheck;
//
//    }
//    public function putWordCheck(Request $request, $id)
//    {
//        $wordCheck =Quests::find($id);
//        if($request["wordId"]!=""){
//            $wordCheck->wordId=$request["wordId"];
//        }
//        if($request["marksNumber"]!=""){
//            $wordCheck->marksNumber = $request["marksNumber"];
//        }
//        $wordCheck->save();
//        return $wordCheck;
//    }
//    public function deleteWordCheck($id)
//    {
//        $wordCheck =Quests::find($id);
//        $wordCheck->delete();
//
//        return $wordCheck;
//    }
}
