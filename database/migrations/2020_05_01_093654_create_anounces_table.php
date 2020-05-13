<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateAnouncesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('anounces', function (Blueprint $table) {
            $table->id();
            $table->string('title');
            $table->string('fileDesc');
            $table->string('description');
            $table->unsignedBigInteger('anounces_id');

            $table->foreign('anounces_id')->references('id')->on('anounces');
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
        Schema::dropIfExists('anounces');
    }
}
