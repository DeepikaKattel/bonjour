<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateCareersTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('careers', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->string('name');
            $table->string('idnum');
            $table->bigInteger('phone');
            $table->string('email');
            $table->string('fathername');
            $table->string('mothername');
            $table->string('district');
            $table->string('municipality');
            $table->integer('ward');
            $table->string('street');
            $table->string('zip');
            $table->string('criminal');
            $table->string('duty');
            $table->string('deadline');
            $table->string('skills');
            $table->string('language');
            $table->string('salary');
            $table->string('work');
            $table->string('education');
            $table->string('university');
            $table->string('apply');
            $table->string('message');
            $table->string('idimg')->nullable();
            $table->string('cv')->nullable();
            $table->string('pp')->nullable();
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
        Schema::dropIfExists('careers');
    }
}
