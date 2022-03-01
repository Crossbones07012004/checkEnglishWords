<?php

namespace Tests\Feature;

use App\Models\Associations;
use App\Models\Quest_saves;
use App\Models\Quests;
use Illuminate\Foundation\Testing\RefreshDatabase;
use Illuminate\Foundation\Testing\WithFaker;
use Illuminate\Http\UploadedFile;
use Tests\TestCase;

class QuestSavesTest extends TestCase
{
    public function test_Get200()
    {
        $response = $this->get('/api/questSaves');

        $response->assertStatus(200);
    }
    public function test_GetById200()
    {
        $response = $this->get('/api/questSaves/1');

        $response->assertStatus(200);
    }
    public function test_Post201()
    {
        $response = $this->post('/api/questSaves', ["user_id" =>"1" ,"quest_id"=>"1","saves"=>"{}"]);

        $response->assertStatus(201);
    }

    public function test_Put200()
    {
        $id=Quest_saves::all()->first()->id;

        $response = $this->put('/api/questSaves/'.$id, ["user_id" =>"1" ,"quest_id"=>"1","saves"=>"{}"]);

        $response->assertStatus(200);
    }

    public function test_Delete200()
    {
        $id=Quest_saves::all()->first()->id;

        $response = $this->delete('/api/questSaves/'.$id);

        $response->assertStatus(200);
    }


}
