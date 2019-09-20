<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateForumPostsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('forum_posts', function (Blueprint $table) {
            $table->bigIncrements('fp_id');
            $table->string('fp_topic');
            $table->string('fp_contants');
            $table->bigInteger('fp_cat_id')->unsigned();
            $table->foreign('fp_cat_id')->references('ct_id')->on('categories');
            $table->decimal('fp_longitude',10,8)->default(0)->nullable();
            $table->decimal('fp_latitude',10,8)->default(0)->nullable();
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
        Schema::dropIfExists('forum_posts');
    }
}
