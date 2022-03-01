<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Quest_saves extends Model
{
    use HasFactory;
    protected $fillable = ['user_id','quest_id','saves'];

    public static function validatedData($request){
        $validated = $request->validate([
            'user_id' => 'sometimes',
            'quest_id' => 'sometimes',
            'saves' => 'sometimes'
        ]);

        return $validated;
    }
}
