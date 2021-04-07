<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateRhsTable extends Migration
{
    /**
     * Run the migrations.php
     *
     * @return void
     */
    public function up()
    {
        Schema::create('rhs', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->unsignedBigInteger('hospital_id');
            $table->foreign('hospital_id')->references('id')->on('hospitals');
            $table->unsignedBigInteger('rh_categoria_id');
            $table->foreign('rh_categoria_id')->references('id')->on('rh_categorias');
            $table->integer('susam_estatutario')->default(0);
            $table->integer('susam_contrato')->default(0);
            $table->integer('prefeitura')->default(0);
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
        Schema::dropIfExists('rhs');
    }
}
