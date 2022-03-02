<?php

namespace Tests\Feature;

use App\Models\Associations;
use Illuminate\Foundation\Testing\RefreshDatabase;
use Illuminate\Foundation\Testing\WithFaker;
use Illuminate\Http\UploadedFile;
use phpDocumentor\Reflection\DocBlock\Tags\Formatter\AlignFormatter;
use Tests\TestCase;

class AssociationsTest extends TestCase
{
    public function test_Get200()
    {
        $response = $this->get('/api/associations');

        $response->assertStatus(200);
    }
    public function test_GetById200()
    {
        $response = $this->get('/api/associations/1');

        $response->assertStatus(200);
    }
    public function test_Post201()
    {
        $file = new UploadedFile("C:\Users\itstep.ITSTEP\Pictures\d.jpg", "d.jpg", 'image/jpg', null, true);

        $response = $this->post('/api/associations', ['imgPath' =>$file ,"text"=>"ddddddddd","wordId"=>"1"]);

        $response->assertStatus(201);
    }

    public function test_Put200()
    {
        $id=Associations::all()->first()->id;
        $file = new UploadedFile("C:\Users\itstep.ITSTEP\Pictures\d.jpg", "d.jpg", 'image/jpg', null, true);

        $response = $this->put('/api/associations/'.$id, ['imgPath' =>$file ,"text"=>"ddddddddd","wordId"=>"1"]);

        $response->assertStatus(200);
    }

    public function test_Delete200()
    {
        $id=Associations::all()->first()->id;
        $response = $this->delete('/api/associations/'.$id);

        $response->assertStatus(200);
    }



}
