<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateRepliesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('replies', function (Blueprint $table) {
            $table->bigIncrements('rp_id');
            $table->string('rp_reply');
            $table->enum('rp_status', ['active','deactive'])->default('active');
            $table->biginteger('rp_cm_id')->unsigned();
            $table->foreign('rp_cm_id')->references('cm_id')->on('replies');

            $table->biginteger('rp_u_id')->unsigned();
            $table->foreign('rp_u_id')->references('id')->on('users');
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
        Schema::dropIfExists('replies');
    }
}
