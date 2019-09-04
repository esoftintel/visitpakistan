<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateAttributesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('attributes', function (Blueprint $table) {
            $table->bigIncrements('at_id');
            $table->string('at_name');
            $table->enum('status',['active','deactive']);
            $table->biginteger('at_ct_id')->unsigned();
            $table->foreign('at_ct_id')->references('ct_id')->on('categories');
            // $table->biginteger('at_st_id')->unsigned();
            // $table->foreign('at_st_id')->references('st_id')->on('subcategories');
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
        Schema::dropIfExists('attributes');
    }
}
