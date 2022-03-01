<?php

namespace Tests\Feature;

use App\Models\Quests;
use Illuminate\Foundation\Testing\RefreshDatabase;
use Illuminate\Foundation\Testing\WithFaker;
use Tests\TestCase;

class QuestsTest extends TestCase
{
    public function test_Get200()
    {
        $response = $this->get('/api/quests');

        $response->assertStatus(200);
    }
    public function test_GetById200()
    {
        $response = $this->get('/api/quests/1');

        $response->assertStatus(200);
    }
    public function test_Post201()
    {
        $response = $this->post('/api/quests', ['password' =>"{}" ,"elementsJson"=>"{}","propertiesJson"=>"{}"]);

        $response->assertStatus(201);
    }

    public function test_Put200()
    {
        $id=Quests::all()->first()->id;

        $response = $this->put('/api/quests/'.$id, ['password' =>"{}" ,"elementsJson"=>"{}","propertiesJson"=>"{}"]);

        $response->assertStatus(200);
    }

    public function test_Delete200()
    {
        $id=Quests::all()->first()->id;

        $response = $this->delete('/api/quests/'.$id);

        $response->assertStatus(200);
    }
}
