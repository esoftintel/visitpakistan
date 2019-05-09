<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateMideasTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('mideas', function (Blueprint $table) {
            $table->bigIncrements('m_id');
            $table->string('m_url');
            $table->string('m_type');
            $table->enum('m_status',['active','deactive']);
            $table->biginteger('m_ps_id')->unsigned();
            $table->foreign('m_ps_id')->references('ps_id')->on('posts');
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
        Schema::dropIfExists('mideas');
    }
}
