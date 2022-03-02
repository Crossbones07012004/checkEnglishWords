<?php

namespace Tests\Feature;

use App\Models\Word_checks;
use App\Models\Words;
use Illuminate\Foundation\Testing\RefreshDatabase;
use Illuminate\Foundation\Testing\WithFaker;
use Tests\TestCase;

class WordsTest extends TestCase
{
    public function test_Get200()
    {
        $response = $this->get('/api/words');

        $response->assertStatus(200);
    }
    public function test_GetById200()
    {
        $response = $this->get('/api/words/1');

        $response->assertStatus(200);
    }
    public function test_Post201()
    {
        $response = $this->post('/api/words', ['eng' => 'sometimes', 'rus' => 'sometimes']);

        $response->assertStatus(201);
    }

    public function test_Put200()
    {

        $id=Words::all()->first()->id;

        $response = $this->put('/api/words/'.$id,   ['eng' => 'sometimes', 'rus' => 'sometimes']);

        $response->assertStatus(200);
    }

    public function test_Delete200()
    {
        $id=Words::all()->first()->id;

        $response = $this->delete('/api/words/'.$id);

        $response->assertStatus(200);
    }
}
