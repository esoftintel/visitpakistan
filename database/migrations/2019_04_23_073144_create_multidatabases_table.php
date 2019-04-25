<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateMultidatabasesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('multidatabases', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->integer('user_id')->unsigned();
            
            $table->string('fav_color');
           // $table->foreign('user_id')->references('id')->on('users');
            $table->timestamps();   
        });

        // Schema::table('multidatabases', function (Blueprint $table) {
        //     $table->Increments('id');
        //     $table->string('favoriteColors');
        //     $table->integer('userd_id')->unsigned();
        //     $table->foreign('user_id')->references('id')->on('users');
        //     $table->timestamps();
        // });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('multidatabases');
    }
}
