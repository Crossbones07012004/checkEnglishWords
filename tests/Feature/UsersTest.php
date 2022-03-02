<?php

namespace Tests\Feature;

use App\Models\Stuff;
use Illuminate\Foundation\Auth\User;
use Illuminate\Foundation\Testing\RefreshDatabase;
use Illuminate\Foundation\Testing\WithFaker;
use Tests\TestCase;

class UsersTest extends TestCase
{
    public function test_Get200()
    {
        $response = $this->get('/api/users');

        $response->assertStatus(200);
    }
    public function test_GetById200()
    {
        $response = $this->get('/api/users/1');

        $response->assertStatus(200);
    }
    public function test_Post201()
    {
        $id=User::all()->last()->id;

        $response = $this->post('/api/users', ["name"=>"dddddd111", "email"=>"ssswwwws".$id, "password"=>"password"]);

        $response->assertStatus(201);
    }

    public function test_Put200()
    {
        $id=User::all()->last()->id;
//        dd($id);
        $response = $this->put('/api/users/'.$id,  ["name"=>"dddddd111", "email"=>"ssswwws".$id, "password"=>"password"]);

        $response->assertStatus(200);
    }

    public function test_Delete200()
    {
        $id=User::all()->last()->id;

        $response = $this->delete('/api/users/'.$id);

        $response->assertStatus(200);
    }
}
