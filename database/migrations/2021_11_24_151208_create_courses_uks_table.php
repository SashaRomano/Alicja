<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateCoursesUksTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('courses_uks', function (Blueprint $table) {
            $table->increments('id');
            $table->string('title');
            $table->text('short_text_1');
            $table->text('link_1')->nullable();
            $table->text('short_text_2')->nullable();
            $table->string('meta_title');
            $table->text('meta_desctiption');
            $table->text('meta_keywords');
            $table->mediumText('text_1');
            $table->text('link_2')->nullable();
            $table->string('anchor_2')->nullable();
            $table->mediumText('text_2')->nullable();
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
        Schema::dropIfExists('courses_uks');
    }
}