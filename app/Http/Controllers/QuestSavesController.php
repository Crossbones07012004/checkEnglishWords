<?php

namespace App\Http\Controllers;

use App\Models\Quests;
use Illuminate\Http\Request;

class QuestSavesController extends Controller
{
    public function view()
    {
        return Quest_saves::all();
    }
    public function addQuestSave(Request $request)
    {
        $questsSaves = new Quest_saves;
        $questsSaves->savesJson=$request["savesJson"];

        $questsSaves->save();
        return $questsSaves;

    }
    public function putQuestSave(Request $request, $id)
    {
        $questsSaves =Quest_saves::find($id);

        if($request["savesJson"]!=null){
            $questsSaves->savesJson = $request["savesJson"];
        }
        $questsSaves->save();
        return $questsSaves;
    }
    public function deleteQuestSave($id)
    {
        $questsSaves =Quest_saves::find($id);
        $questsSaves->delete();
        return $questsSaves;
    }
}
