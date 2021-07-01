<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateLeitosTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('leitos', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->unsignedBigInteger('hospital_id')->unique();
            $table->foreign('hospital_id')->references('id')->on('hospitals')->onDelete('cascade');
            $table->integer('leito_clinico')->default(0);
            $table->integer('leito_cirurgico')->default(0);
            $table->integer('leito_obstetrico')->default(0);
            $table->integer('leito_pediatrico')->default(0);
            $table->integer('leito_outro')->default(0);
            $table->integer('suporte_ventilatorio')->default(0);
            $table->integer('uci_adulto')->default(0);
            $table->integer('uci_pediatrico')->default(0);
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
        Schema::dropIfExists('leitos');
    }
}
