<?php

namespace Tests\Unit;

use App\Models\Quests;
use App\Models\Stuff;
use Tests\TestCase;

class StuffsTest extends TestCase
{
    public function test_fieldExists()
    {
        $data = Stuff::all()->first();
        $this->assertTrue(array_key_exists('name', $data->toArray()));
    }

    public function test_fieldNotExists()
    {
        $data = Stuff::all()->random(1)->first();

        $this->assertFalse(array_key_exists('tresh', $data->toArray()));
    }

    public function test_fieldsEqual()
    {
        $data = "1";
        $brand = new Stuff(
            [
                "name"=>"1",
            ]);
        $this->assertEquals($data, $brand['name']);
    }

    public function test_fieldNull()
    {
        $booking = new Stuff();
        $this->assertNull($booking['id']);
    }
}
