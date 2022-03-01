<?php

namespace App\Http\Controllers;

use App\Http\creator\VAPDSampleController;
use App\Models\Associations;
use App\Models\Word_checks;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;

class AssociationsController extends VAPDSampleController
{
    public $model = Associations::class;
    public function post(Request $request)
    {
        $association = new Associations;
        $association->imgPath = Storage::disk('local')->put('', $request["imgPath"]);
        $association->text= $request["text"];
        $association->wordId= $request["wordId"];
        $association->save();
        return $association;

    }
    public function put(Request $request, $id)
    {
        $association =Associations::find($id);
        if($request["file"]!=null){
            $association->imgPath = Storage::disk('local')->put('', $request["imgPath"]);
        }
        if($request["text"]!=""){
            $association->text = $request["text"];
        }
        if($request["wordId"]!=""){
            $association->wordId = $request["wordId"];
        }
        $association->save();
        return $association;
    }
    public function delete($id)
    {
        $association =Associations::find($id);
        Storage::delete($association->imgPath);
        $association->delete();
        return $association;
    }
}
