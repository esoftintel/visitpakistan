<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateTagsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('tags', function (Blueprint $table) {
            $table->bigIncrements('tg_id'); 
            $table->string('tg_name');
            $table->string('tg_green_icon'); 
            $table->string('tg_wight_icon');
            $table->enum('tg_status', ['active','deactive'])->default('active');
            $table->biginteger('tg_ct_id')->unsigned();
            $table->foreign('tg_ct_id')->references('ct_id')->on('categories');
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
        Schema::dropIfExists('tags');
    }
}
