<?php

namespace Tests\Feature;

use Illuminate\Foundation\Testing\RefreshDatabase;
use Illuminate\Foundation\Testing\WithFaker;
use Tests\TestCase;

class UsersTest extends TestCase
{
    public function Get200()
    {
        $response = $this->get('/users');

        $response->assertStatus(200);
    }
    public function Post200()
    {
        $response = $this->post('/users');

        $response->assertStatus(200);
    }

    public function Put200()
    {
        $response = $this->put('/users');

        $response->assertStatus(200);
    }

    public function Delete200()
    {
        $response = $this->delete('/users');

        $response->assertStatus(200);
    }
}
