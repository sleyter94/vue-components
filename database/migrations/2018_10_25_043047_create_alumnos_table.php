<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateAlumnosTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('students', function (Blueprint $table) {
            $table->engine='InnoDB';
            $table->increments('id');
            $table->string('firstname',200);
            $table->string('lastname',200);
            $table->string('dni',8);
            $table->date('borndate');
            $table->string('email');
            $table->unsignedInteger('tutor');
            $table->unsignedInteger('subsidiary');
            $table->unsignedInteger('user');
            $table->foreign('tutor')->references('id')->on('tutors');
            $table->foreign('subsidiary')->references('id')->on('subsidiaries');
            $table->foreign('user')->references('id')->on('users');
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
        Schema::dropIfExists('alumnos');
    }
}
