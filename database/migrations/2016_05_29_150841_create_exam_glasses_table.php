<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateExamGlassesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('exam_glasses', function (Blueprint $table) {
            $table->increments('id');
            $table->enum('eye_type', array('Right', 'Left'));
            $table->enum('exam_glass_type', array('sph'=>'Sph','cyl'=>'Cyl','axis'=>'Axis'));
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
        Schema::drop('exam_glasses');
    }
}
