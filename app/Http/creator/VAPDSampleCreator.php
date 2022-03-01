<?php

namespace App\Http\creator;

use Illuminate\Support\Facades\Route;

class VAPDSampleCreator
{
    public static function create($url, $controllerClass)
    {
        Route::get('/' . $url, [$controllerClass, 'get']);
        Route::post('/' . $url, [$controllerClass, 'post']);
        Route::put('/' . $url . '/{id}', [$controllerClass, 'put']);
        Route::delete('/' . $url . '/{id}', [$controllerClass, 'delete']);
    }
}
