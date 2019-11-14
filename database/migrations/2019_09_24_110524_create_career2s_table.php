<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateCareer2sTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('career2s', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->string('Title')->nullable();
            $table->longText('JobTitle');
            $table->longText('JobDescription');
            $table->date('Deadline');
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
        Schema::dropIfExists('career2s');
    }
}
