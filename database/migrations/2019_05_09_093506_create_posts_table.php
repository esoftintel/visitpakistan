<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreatePostsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('posts', function (Blueprint $table) {
            $table->bigIncrements('ps_id');
            $table->string('ps_title');
            $table->string('ps_detail');
            $table->string('ps_price');
            $table->string('ps_address');
            $table->string('ps_lati');
            $table->string('ps_longi');
            $table->enum('ps_status',['active','deactive']);
            $table->enum('ps_type',['normal','feature']);
            $table->enum('ps_cell',['show','hide']);
            $table->biginteger('ps_ct_id')->unsigned();
            $table->foreign('ps_ct_id')->references('ct_id')->on('categories');

            $table->biginteger('ps_st_id')->unsigned();
            $table->foreign('ps_st_id')->references('st_id')->on('subcategories');

            $table->biginteger('ps_ur_id')->unsigned();

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
        Schema::dropIfExists('posts');
    }
}
