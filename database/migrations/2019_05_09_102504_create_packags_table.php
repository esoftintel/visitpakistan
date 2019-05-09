<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreatePackagsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('packags', function (Blueprint $table) {
            $table->bigIncrements('pk_id');
            $table->string('pk_title');
            $table->string('pk_detail');
            $table->string('pk_price');
            $table->string('pk_duration');
            $table->enum('pk_status',['active','deactive']);
            $table->biginteger('pk_ct_id')->unsigned();
            $table->foreign('pk_ct_id')->references('ct_id')->on('categories');

            $table->biginteger('pk_st_id')->unsigned();
            $table->foreign('pk_st_id')->references('st_id')->on('subcategories');
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
        Schema::dropIfExists('packags');
    }
}
