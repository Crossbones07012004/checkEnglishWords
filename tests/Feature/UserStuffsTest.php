<?php

namespace Tests\Feature;

use App\Models\Stuff;
use App\Models\UserStuffs;
use Illuminate\Foundation\Testing\RefreshDatabase;
use Illuminate\Foundation\Testing\WithFaker;
use Tests\TestCase;

class UserStuffsTest extends TestCase
{
    public function test_Get200()
    {
        $response = $this->get('/api/userStuffs');

        $response->assertStatus(200);
    }
    public function test_GetById200()
    {
        $response = $this->get('/api/userStuffs/2');

        $response->assertStatus(200);
    }
    public function test_Post201()
    {
        $response = $this->post('/api/userStuffs', ['user_id' =>"1", 'stuff_id' =>"1", 'quantity' =>"1"]);

        $response->assertStatus(201);
    }

    public function test_Put200()
    {
        $id=UserStuffs::all()->first()->id;

        $response = $this->put('/api/userStuffs/'.$id,  ['user_id' =>"1", 'stuff_id' =>"1", 'quantity' =>"1"]);

        $response->assertStatus(200);
    }

    public function test_Delete200()
    {
        $id=UserStuffs::all()->first()->id;

        $response = $this->delete('/api/userStuffs/'.$id);

        $response->assertStatus(200);
    }
}
