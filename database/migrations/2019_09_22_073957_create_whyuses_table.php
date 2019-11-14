<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateWhyusesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('whyuses', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->longText('Heading')->nullable();
            $table->longText('Title')->nullable();
            $table->longText('Paragraph')->nullable();
            $table->longText('Paragraph1')->nullable();
            $table->longText('Paragraph2')->nullable();
            $table->longText('Paragraph3')->nullable();
            $table->string('Image')->nullable();
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
        Schema::dropIfExists('whyuses');
    }
}
