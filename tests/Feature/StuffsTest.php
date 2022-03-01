<?php

namespace Tests\Feature;

use Illuminate\Foundation\Testing\RefreshDatabase;
use Illuminate\Foundation\Testing\WithFaker;
use Tests\TestCase;

class StuffsTest extends TestCase
{
    public function Get200()
    {
        $response = $this->get('/stuffs');

        $response->assertStatus(200);
    }
    public function Post200()
    {
        $response = $this->post('/stuffs');

        $response->assertStatus(200);
    }

    public function Put200()
    {
        $response = $this->put('/stuffs');

        $response->assertStatus(200);
    }

    public function Delete200()
    {
        $response = $this->delete('/stuffs');

        $response->assertStatus(200);
    }
}
