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
        $word =Words::find($id);
        $association->imgPath = Storage::disk('local')->put('association/img', $request["file"]);
        $association->text= $request["text"];
        $association->wordId= $request["wordId"];
        $word->save();
        return "put";
    }
    public function deleteAssociation($id)
    {
        $word =Words::find($id);
        $word->delete();
        return "delete";
    }
}
