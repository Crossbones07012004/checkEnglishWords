<?php

namespace Tests\Feature;

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
    public function test_Post200()
    {
        $response = $this->post('/api/words', ['eng' => "ddddddddd","rus"=>"rus"]);
//        dd($response);
        $response->assertStatus(201);
    }
}
