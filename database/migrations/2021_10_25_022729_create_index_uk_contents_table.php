<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateIndexUkContentsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('index_uk_contents', function (Blueprint $table) {
            $table->increments('id');
            $table->string('title');
            $table->text('description');
            $table->text('keywords');
            $table->mediumText('us');
            $table->text('attention');
            $table->string('button_main');
            $table->text('icon_1');
            $table->string('subtitle_1');
            $table->mediumText('subtext_1');
            $table->string('button_1');
            $table->text('icon_2');
            $table->string('subtitle_2');
            $table->mediumText('subtext_2');
            $table->string('button_2');
            $table->text('icon_3');
            $table->string('subtitle_3');
            $table->mediumText('subtext_3');
            $table->string('button_3');
            $table->string('review_title');
            $table->mediumText('review_text_1');
            $table->string('review_author_1');
            $table->string('review_location_1');
            $table->date('review_date_1');
            $table->mediumText('review_text_2');
            $table->string('review_author_2');
            $table->string('review_location_2');
            $table->date('review_date_2');
            $table->mediumText('review_text_3');
            $table->string('review_author_3');
            $table->string('review_location_3');
            $table->date('review_date_3');
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
        Schema::dropIfExists('index_uk_contents');
    }
}
