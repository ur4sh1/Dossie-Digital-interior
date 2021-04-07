<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateVeiculosTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('veiculos', function (Blueprint $table){
           $table->bigIncrements('id');
           $table->unsignedBigInteger('hospital_id');
           $table->foreign('hospital_id')->references('id')->on('hospitals')->onDelete('cascade');
           $table->integer('administrativo_existente')->default(0);
           $table->integer('administrativo_funcional')->default(0);
           $table->integer('ambulancia_terrestre_existente')->default(0);
           $table->integer('ambulancia_terrestre_funcional')->default(0);
           $table->integer('ambulancia_fluvial_existente')->default(0);
           $table->integer('ambulancia_fluvial_funcional')->default(0);
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
        Schema::dropIfExists('veiculos');
    }
}
