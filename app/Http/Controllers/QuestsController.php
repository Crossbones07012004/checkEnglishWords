<?php

namespace App\Http\Controllers;

use App\Models\Quests;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;

class QuestsController extends Controller
{
    public function view()
    {
        return Quests::all();
    }
    public function addQuest(Request $request)
    {
        $quests = new Quests;
        $quests->password=$request["password"];
        $quests->elementsJson=$request["elementsJson"];
        $quests->propertiesJson=$request["propertiesJson"];

        $quests->save();
        return $quests;

    }
    public function putQuest(Request $request, $id)
    {
        $quests =Quests::find($id);
        if($quests["password"]!=""){
            $quests->password=$request["password"];
        }
        if($request["elementsJson"]!=null){
            $quests->elementsJson = $request["elementsJson"];
        }
        if($request["propertiesJson"]!=null){
            $quests->propertiesJson = $request["propertiesJson"];
        }
        $quests->save();
        return $quests;
    }
    public function deleteQuest($id)
    {
        $quests =Quests::find($id);
        $quests->delete();
        return $quests;
    }
}
