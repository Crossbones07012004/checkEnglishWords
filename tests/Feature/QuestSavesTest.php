<?php

namespace Tests\Feature;

use Illuminate\Foundation\Testing\RefreshDatabase;
use Illuminate\Foundation\Testing\WithFaker;
use Tests\TestCase;

class QuestSavesTest extends TestCase
{
    public function test_Get200()
    {
        $response = $this->get('/questSaves');

        $response->assertStatus(200);
    }
    public function test_Post200()
    {
        $response = $this->post('/questSaves', ["text"=>"ddddddddd","wordId"=>"1"]);

        $response->assertStatus(200);
    }

    public function Put200()
    {
        $response = $this->put('/questSaves');

        $response->assertStatus(200);
    }

    public function Delete200()
    {
        $response = $this->delete('/questSaves');

        $response->assertStatus(200);
    }
}
