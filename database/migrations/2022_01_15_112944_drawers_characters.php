<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class DrawersCharacters extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('drawers_characters', function (Blueprint $table) {
            $table->unsignedBigInteger('characters_id');
            $table->unsignedBigInteger('drawers_id');
            $table->primary(['characters_id', 'drawers_id']);
            $table->foreign('characters_id')->references('id')->on('characters');
            $table->foreign('drawers_id')->references('id')->on('drawers');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('drawers_characters');
    }
}
