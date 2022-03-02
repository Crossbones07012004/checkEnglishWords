<?php

namespace Tests\Unit;

use App\Models\UserStuffs;
use App\Models\Word_checks;
use Tests\TestCase;

class WordChecksTest extends TestCase
{
    public function test_fieldExists()
    {
        $data = Word_checks::all()->first();
        $this->assertTrue(array_key_exists('wordId', $data->toArray()));
    }

    public function test_fieldNotExists()
    {
        $data = Word_checks::all()->random(1)->first();

        $this->assertFalse(array_key_exists('tresh', $data->toArray()));
    }

    public function test_fieldsEqual()
    {
        $data = "1";
        $brand = new Word_checks(
            [
                "wordId"=>"1",
                "marksNumber"=>"1",
            ]);
        $this->assertEquals($data, $brand['wordId']);
    }

    public function test_fieldNull()
    {
        $booking = new Word_checks();
        $this->assertNull($booking['id']);
    }
}
