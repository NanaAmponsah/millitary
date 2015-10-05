<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreatePersonnelsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('personnels', function (Blueprint $table) {
            $table->increments('id');
            $table->string('serviceno');
            $table->string('rankno');
            $table->string('depart');
            $table->string('firstname');
            $table->string('middlename');
            $table->string('lastname');
            $table->string('dob')->nullable();
            $table->string('doe')->nullable();
            $table->string('nok');
            $table->string('promdate')->nullable();
            $table->string('maritalstatus');
            $table->string('gender');
            $table->string('religion');
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
        Schema::drop('personnels');
    }
}
