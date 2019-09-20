<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateForumMediaTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('forum_media', function (Blueprint $table) {
            $table->bigIncrements('fm_id');
            $table->string('fm_media');
            $table->bigInteger('fm_post_id')->unsigned();
            $table->foreign('fm_post_id')->references('fp_id')->on();
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
        Schema::dropIfExists('forum_media');
    }
}
