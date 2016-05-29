<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateMedicinesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('medicines', function (Blueprint $table) {
            $table->increments('id');
            $table->string('name',100);
            $table->enum('types', array('eye_drops' =>'Eye Drops',
             'eye_ointment'=>'Eye Ointment',
             'capsule'=>'Capsule','tablet'=>'Tablet',
             'syurp'=>'Syurp','suspension'=>'Suspension'));
            $table->string('company',100);
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
        Schema::drop('medicines');
    }
}
