<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Associations extends Model
{
    use HasFactory;

    protected $fillable = ['imgPath','text', "wordId"];

    public static function validatedData($request){
        $validated = $request->validate([
            'text' => 'sometimes',
            'imgPath' => 'sometimes',
            'wordId'=> 'sometimes'
        ]);

        return $validated;
    }
}
