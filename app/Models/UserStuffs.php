<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class UserStuffs extends Model
{
    use HasFactory;
            protected $fillable = ['user_id', 'stuff_id', 'quantity', ];

    public static function validatedData($request){
        $validated = $request->validate([
            'user_id' => 'sometimes',
            'stuff_id' => 'sometimes',
            'quantity' => 'sometimes',

        ]);

        return $validated;
    }
}
