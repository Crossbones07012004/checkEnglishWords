<?php

namespace Tests\Unit;

use App\Models\User;
use App\Models\UserStuffs;
use Tests\TestCase;

class UserStuffsTest extends TestCase
{
    public function test_fieldExists()
    {
        $data = UserStuffs::all()->first();
        $this->assertTrue(array_key_exists('user_id', $data->toArray()));
    }

    public function test_fieldNotExists()
    {
        $data = UserStuffs::all()->random(1)->first();

        $this->assertFalse(array_key_exists('tresh', $data->toArray()));
    }

    public function test_fieldsEqual()
    {
        $data = "1";
        $brand = new UserStuffs(
            [
                "user_id"=>"1",
                "stuff_id"=>"1",
                "quantity"=>"1",
            ]);
        $this->assertEquals($data, $brand['user_id']);
    }

    public function test_fieldNull()
    {
        $booking = new UserStuffs();
        $this->assertNull($booking['id']);
    }
}
