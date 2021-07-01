<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateSalacirurgicasTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('salacirurgicas', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->unsignedBigInteger('hospital_id')->unique();
            $table->foreign('hospital_id')->references('id')->on('hospitals')->onDelete('cascade');
            $table->integer('sala_cirurgicas_existentes');
            $table->integer('sala_cirurgicas_funcionais');
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
        Schema::dropIfExists('salacirurgicas');
    }
}
