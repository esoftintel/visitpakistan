<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateCommentsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('comments', function (Blueprint $table) {
            $table->bigIncrements('cm_id');
            $table->string('cm_comment');
            $table->enum('cm_status', ['active','deactive'])->default('active');
            $table->biginteger('cm_ps_id')->unsigned();
            $table->foreign('cm_ps_id')->references('ps_id')->on('posts');

            $table->biginteger('cm_u_id')->unsigned();
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
        Schema::dropIfExists('comments');
    }
}
