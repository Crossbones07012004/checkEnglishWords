<?php

namespace Tests\Feature;

use Illuminate\Foundation\Testing\RefreshDatabase;
use Illuminate\Foundation\Testing\WithFaker;
use Tests\TestCase;

class AssociationsTest extends TestCase
{
    public function test_Get200()
    {
        $response = $this->get('/api/associations');

        $response->assertStatus(200);
    }
    public function test_Post200()
    {
        $response = $this->post('/api/associations', ['imgPath' => file("C:\Users\itstart.ITSTEP\Pictures\IMG_0729.jpg"),"text"=>"ddddddddd","wordId"=>"1"]);
//        dd($response);
        $response->assertStatus(200);
    }

    public function test_Put200()
    {
        $response = $this->put('/api/associations');

        $response->assertStatus(200);
    }

    public function test_Delete200()
    {
        $response = $this->delete('/api/associations');

        $response->assertStatus(200);
    }



}
