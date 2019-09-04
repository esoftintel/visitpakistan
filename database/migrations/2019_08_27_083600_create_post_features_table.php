<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreatePostFeaturesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('post_features', function (Blueprint $table) {
            $table->bigIncrements('pf_id');
            $table->biginteger('pf_ps_id')->unsigned();
            $table->foreign('pf_ps_id')->references('ps_id')->on('posts');

            $table->biginteger('pf_fe_id')->unsigned();
            $table->foreign('pf_fe_id')->references('fe_id')->on('features');
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
        Schema::dropIfExists('post_features');
    }
}
