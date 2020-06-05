<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateDatesTable extends Migration
{
    /**
     * Migrcaciones de creacion de citas
     *
     * @return void
     */
    public function up()
    {
        Schema::create('create_dates', function (Blueprint $table) {
            $table->bigIncrements('id')->unique();
            $table->string('userName');
            $table->string('userPhone');
            $table->string('day');
            $table->integer('time');
            $table->string('barber');
            $table->string('service');
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
        Schema::dropIfExists('dates');
    }
}
