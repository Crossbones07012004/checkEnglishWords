<?php

use Illuminate\Support\Facades\Route;

class VAPDSampleCreator{
    public static function create($url,$controllerClass )
    {
        Route::get('/'.$url, [$controllerClass, 'view']);
        Route::post('/'.$url, [$controllerClass, 'add']);
        Route::put('/'.$url.'/{id}', [$controllerClass, 'put']);
        Route::delete('/'.$url.'/{id}', [$controllerClass, 'delete']);
    }
}
