<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Quests extends Model
{
    use HasFactory;
    protected $fillable = ['password','elementsJson','propertiesJson',];

    public static function validatedData($request){
        $validated = $request->validate([
            'password' => 'sometimes',
            'elementsJson' => 'sometimes',
            'propertiesJson' => 'sometimes',

        ]);

        return $validated;
    }
}
