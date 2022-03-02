<?php

namespace Tests\Unit;

use App\Models\Quests;
use Tests\TestCase;

class QuestsTest extends TestCase
{
    public function test_fieldExists()
    {
        $data = Quests::all()->first();
        $this->assertTrue(array_key_exists('password', $data->toArray()));
    }

    public function test_fieldNotExists()
    {
        $data = Quests::all()->random(1)->first();

        $this->assertFalse(array_key_exists('tresh', $data->toArray()));
    }

    public function test_fieldsEqual()
    {
        $data = "1";
        $brand = new Quests(
            [
                "password"=>"1",
                "elementsJson"=>"{}",
                "propertiesJson"=>"{}"
            ]);
        $this->assertEquals($data, $brand['password']);
    }

    public function test_fieldNull()
    {
        $booking = new Quests();
        $this->assertNull($booking['id']);
    }
}
