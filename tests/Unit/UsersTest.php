<?php

namespace Tests\Unit;

use App\Models\Stuff;
use App\Models\User;
use Tests\TestCase;

class UsersTest extends TestCase
{
    public function test_fieldExists()
    {
        $data = User::all()->first();
        $this->assertTrue(array_key_exists('name', $data->toArray()));
    }

    public function test_fieldNotExists()
    {
        $data = User::all()->random(1)->first();

        $this->assertFalse(array_key_exists('tresh', $data->toArray()));
    }

    public function test_fieldsEqual()
    {
        $data = "1";
        $brand = new User(
            [
                "name"=>"1",
                "email"=>"1",
                "password"=>"1",
            ]);
        $this->assertEquals($data, $brand['name']);
    }

    public function test_fieldNull()
    {
        $booking = new User();
        $this->assertNull($booking['id']);
    }
}
