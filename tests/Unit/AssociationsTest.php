<?php

namespace Tests\Unit;

use App\Models\Associations;
use Tests\TestCase;

class AssociationsTest extends TestCase
{
    public function test_fieldExists()
    {
        $data = Associations::all()->first();
        $this->assertTrue(array_key_exists('imgPath', $data->toArray()));
    }

    public function test_fieldNotExists()
    {
        $data = Associations::all()->random(1)->first();

        $this->assertFalse(array_key_exists('tresh', $data->toArray()));
    }

    public function test_fieldsEqual()
    {
        $data = "test text";
        $brand = new Associations(
            [
                "text"=>"test text",
                "imgPath"=>"test.jpg",
                "wordId"=>"1"
            ]);
        $this->assertEquals($data, $brand['text']);
    }

    public function test_fieldNull()
    {
        $booking = new Associations();
        $this->assertNull($booking['id']);
    }
}
