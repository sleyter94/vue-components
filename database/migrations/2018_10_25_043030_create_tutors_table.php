<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateTutorsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('tutors', function (Blueprint $table) {
            $table->engine = 'InnoDB';
            $table->increments('id');
            $table->string('firstname',200);
            $table->string('lastname',200);
            $table->string('dni',8);
            $table->date('borndate');
            $table->text('address');
            $table->text('reference');
            $table->string('email');
            $table->string('cellphone');
            $table->unsignedInteger('subsidiary');
            $table->unsignedInteger('user');
            $table->foreign('user')->references('id')->on('users');
            $table->foreign('subsidiary')->references('id')->on('subsidiaries');
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
        Schema::dropIfExists('tutors');
    }
}
