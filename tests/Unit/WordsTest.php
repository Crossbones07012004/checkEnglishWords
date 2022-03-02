<?php

namespace Tests\Unit;

use App\Models\Word_checks;
use App\Models\Words;
use Tests\TestCase;

class WordsTest extends TestCase
{
    public function test_fieldExists()
    {
        $data = Words::all()->first();
        $this->assertTrue(array_key_exists('eng', $data->toArray()));
    }

    public function test_fieldNotExists()
    {
        $data = Words::all()->random(1)->first();

        $this->assertFalse(array_key_exists('tresh', $data->toArray()));
    }

    public function test_fieldsEqual()
    {
        $data = "1";
        $brand = new Words(
            [
                "eng"=>"1",
                "rus"=>"1",
            ]);
        $this->assertEquals($data, $brand['eng']);
    }

    public function test_fieldNull()
    {
        $booking = new Words();
        $this->assertNull($booking['id']);
    }
}
