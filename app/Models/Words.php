<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Words extends Model
{

    use HasFactory;

    protected $fillable = ['eng', 'rus'];

    public static function validatedData($request){
        $validated = $request->validate([
            'eng' => 'sometimes',
            'rus' => 'sometimes',
        ]);

        return $validated;
    }
}
