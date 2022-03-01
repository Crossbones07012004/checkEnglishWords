<?php

namespace Tests\Feature;

use Illuminate\Foundation\Testing\RefreshDatabase;
use Illuminate\Foundation\Testing\WithFaker;
use Tests\TestCase;

class QuestsTest extends TestCase
{
    public function Get200()
    {
        $response = $this->get('/quests');

        $response->assertStatus(200);
    }
    public function Post200()
    {
        $response = $this->post('/quests');

        $response->assertStatus(200);
    }

    public function Put200()
    {
        $response = $this->put('/quests');

        $response->assertStatus(200);
    }

    public function Delete200()
    {
        $response = $this->delete('/quests');

        $response->assertStatus(200);
    }
}
