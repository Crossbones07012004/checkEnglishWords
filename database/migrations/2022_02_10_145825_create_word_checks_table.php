<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateWordChecksTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('word_checks', function (Blueprint $table) {
            $table->id();
            $table->integer("wordId");
            $table->integer("marksNumber");
        });
    }
    
    public function down()
    {
        Schema::dropIfExists('word_checks');
    }
}
