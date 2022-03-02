<?php

namespace Tests\Feature;

use App\Models\UserStuffs;
use App\Models\Word_checks;
use Illuminate\Foundation\Testing\RefreshDatabase;
use Illuminate\Foundation\Testing\WithFaker;
use Tests\TestCase;

class WordChecksTest extends TestCase
{
    public function test_Get200()
    {
        $response = $this->get('/api/wordChecks');

        $response->assertStatus(200);
    }
    public function test_GetById200()
    {
        $response = $this->get('/api/wordChecks/1');

        $response->assertStatus(200);
    }
    public function test_Post201()
    {
        $response = $this->post('/api/wordChecks', ['wordId' =>"1", 'marksNumber' =>"1"]);

        $response->assertStatus(201);
    }

    public function test_Put200()
    {

        $id=Word_checks::all()->first()->id;

        $response = $this->put('/api/wordChecks/'.$id,  ['wordId' =>"1", 'marksNumber' =>"1"]);

        $response->assertStatus(200);
    }

    public function test_Delete200()
    {
        $id=Word_checks::all()->first()->id;

        $response = $this->delete('/api/wordChecks/'.$id);

        $response->assertStatus(200);
    }
}
