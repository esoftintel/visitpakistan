<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreatePostPackagsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('post_packags', function (Blueprint $table) {
            $table->bigIncrements('psk_id');
            $table->enum('psk_status',['active','deactive']);
            $table->biginteger('psk_pk_id')->unsigned();
            $table->foreign('psk_pk_id')->references('pk_id')->on('packags');

            $table->integer('psk_u_id')->unsigned();
            $table->foreign('psk_u_id')->references('id')->on('users');

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
        Schema::dropIfExists('post_packags');
    }
}
