<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class Orders extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        //
        Schema::create('orders', function (Blueprint $table) {
            $table->increments('id');
            $table->string('placeID')->nullable();
            $table->string('placeName')->nullable();
            $table->string('description');
            $table->string('Img')->nullable();
            $table->integer('user_id')->unsigned()->nullable();
            $table->foreign('user_id')->references('id')->on('users');

            $table->integer('rep_id')->unsigned()->nullable();
            $table->foreign('rep_id')->references('id')->on('users');

            $table->string('ststus')->nullable();
            $table->string('fees')->nullable();
            $table->integer('payType')->nullable();
            $table->string('Lat')->nullable();
            $table->string('lang')->nullable();
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
        //
    }
}
