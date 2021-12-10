<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateRuLevelsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('ru_levels', function (Blueprint $table) {
            $table->increments('id');
            $table->string('name');
            $table->text('description')->nullable();
            $table->tinyInteger('first_level');
            $table->string('first_level_txt');
            $table->tinyInteger('last_level');
            $table->string('last_level_txt');
            $table->tinyInteger('duration');
            $table->string('duration_txt');
            $table->integer('price');
            $table->string('price_txt');
            $table->smallInteger('sale')->nullable();
            $table->text('sale_txt')->nullable();
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('ru_levels');
    }
}
