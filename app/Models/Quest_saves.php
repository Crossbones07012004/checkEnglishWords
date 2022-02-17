<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Quest_saves extends Model
{
    use HasFactory;
    protected $fillable = ['savesJson'];

    public static function validatedData($request){
        $validated = $request->validate([
            'savesJson' => 'sometimes'
        ]);

        return $validated;
    }
}
