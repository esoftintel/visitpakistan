<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreatePostTagsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('post_tags', function (Blueprint $table) {
            $table->bigIncrements('pt_id');
            $table->biginteger('pt_ps_id')->unsigned();
            $table->foreign('pt_ps_id')->references('ps_id')->on('posts');

            $table->biginteger('pt_tg_id')->unsigned();
            $table->foreign('pt_tg_id')->references('tg_id')->on('tags');
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
        Schema::dropIfExists('post_tags');
    }
}
