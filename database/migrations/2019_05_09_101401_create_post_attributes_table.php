<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreatePostAttributesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('post_attributes', function (Blueprint $table) {
            $table->bigIncrements('pt_id');
            $table->string('pt_title');
            $table->string('pt_value');
            $table->enum('pt_status',['active','deactive']);
            $table->biginteger('pt_ps_id')->unsigned();
            $table->foreign('pt_ps_id')->references('ps_id')->on('posts');
            $table->softDeletes();
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
        Schema::dropIfExists('post_attributes');
    }
}
