<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class AddRowsToQuestSavesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::table('quest_saves', function (Blueprint $table) {
            $table->integer("user_id");
            $table->integer("quest_id");
            $table->json("saves");
            $table->dropColumn('name');
        });

    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::table('quest_saves', function (Blueprint $table) {
            //
        });
    }
}
