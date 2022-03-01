<?php

namespace Tests\Feature;

use Illuminate\Foundation\Testing\RefreshDatabase;
use Illuminate\Foundation\Testing\WithFaker;
use Tests\TestCase;

class UserStuffsTest extends TestCase
{
    public function Get200()
    {
        $response = $this->get('/userStuffs');

        $response->assertStatus(200);
    }
    public function Post200()
    {
        $response = $this->post('/userStuffs');

        $response->assertStatus(200);
    }

    public function Put200()
    {
        $response = $this->put('/userStuffs');

        $response->assertStatus(200);
    }

    public function Delete200()
    {
        $response = $this->delete('/userStuffs');

        $response->assertStatus(200);
    }
}
