<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Word_checks extends Model
{
    use HasFactory;

    protected $fillable = ['eng', 'rus'];

    public static function validatedData($request){
        $validated = $request->validate([
            'wordId' => 'sometimes',
            'marksNumber' => 'sometimes',
        ]);

        return $validated;
    }

}
