<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateReserveTypesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('reserve_types', function (Blueprint $table) {
            $table->increments('id');
            $table->enum('type', array('examination'=>'Examination', 'firstConsultation'=>'First_Consultation','secondConsultation'=>'Second_Consultation','thirdConsultation'=>'Third_Consultation','glassesPrescription'=>'GlassesPrescription'));
            $table->integer('parent_id')->unsigned()->index();
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
        Schema::drop('reserve_types');
    }
}
