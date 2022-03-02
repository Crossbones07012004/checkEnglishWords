<?php

namespace Tests\Unit;

use App\Models\Associations;
use App\Models\Quest_saves;
use Tests\TestCase;

class QuestSavesTest extends TestCase
{
    public function test_fieldExists()
    {
        $data = Quest_saves::all()->first();
        $this->assertTrue(array_key_exists('user_id', $data->toArray()));
    }

    public function test_fieldNotExists()
    {
        $data = Quest_saves::all()->random(1)->first();

        $this->assertFalse(array_key_exists('tresh', $data->toArray()));
    }

    public function test_fieldsEqual()
    {
        $data = "1";
        $brand = new Quest_saves(
            [
                "user_id"=>"1",
                "quest_id"=>"1",
                "saves"=>"{}"
            ]);
        $this->assertEquals($data, $brand['user_id']);
    }

    public function test_fieldNull()
    {
        $booking = new Quest_saves();
        $this->assertNull($booking['id']);
    }
}

