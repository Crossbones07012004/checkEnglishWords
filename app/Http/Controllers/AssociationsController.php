<?php

namespace App\Http\Controllers;

use App\Models\Associations;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;

class AssociationsController extends Controller
{
    public function view()
    {
        return Associations::all();
    }
    public function addAssociation(Request $request)
    {
        $association = new Associations;
        $association->imgPath = Storage::disk('local')->put('association/img', $request["file"]);

        $association->text= $request["text"];
        $association->wordId= $request["wordId"];
        $association->save();
        return $association;

    }
    public function putAssociation(Request $request, $id)
    {
        $association =Associations::find($id);
        if($request["file"]!=null){
            $association->imgPath = Storage::disk('local')->put('association/img', $request["file"]);
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
    public function deleteAssociation($id)
    {
        $association =Associations::find($id);
        $association->delete();
        return $association;
    }
}
