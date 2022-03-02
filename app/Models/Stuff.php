<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Stuff extends Model
{
    use HasFactory;
    protected $fillable = ['name'];

    public static function validatedData($request){
        $validated = $request->validate([
                'name' => 'sometimes',
        ]);

        return $validated;
    }
}
