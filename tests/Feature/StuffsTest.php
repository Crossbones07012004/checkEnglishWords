<?php

namespace Tests\Feature;

use App\Models\Quests;
use App\Models\Stuff;
use Illuminate\Foundation\Testing\RefreshDatabase;
use Illuminate\Foundation\Testing\WithFaker;
use Tests\TestCase;

class StuffsTest extends TestCase
{
    public function test_Get200()
    {
        $response = $this->get('/api/stuffs');

        $response->assertStatus(200);
    }
    public function test_GetById200()
    {
        $response = $this->get('/api/stuffs/1');

        $response->assertStatus(200);
    }
    public function test_Post201()
    {
        $response = $this->post('/api/stuffs', ['name' =>"{}"]);

        $response->assertStatus(201);
    }

    public function test_Put200()
    {
        $id=Stuff::all()->first()->id;

        $response = $this->put('/api/stuffs/'.$id,  ['name' =>"{}"]);

        $response->assertStatus(200);
    }

    public function test_Delete200()
    {
        $id=Stuff::all()->first()->id;

        $response = $this->delete('/api/stuffs/'.$id);

        $response->assertStatus(200);
    }
}
