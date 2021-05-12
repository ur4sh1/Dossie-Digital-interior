<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateProgramasTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('programas', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->unsignedBigInteger('municipio_id');
            $table->foreign('municipio_id')->references('id')->on('municipios');
            $table->string('descricao');
            $table->string('sigla');
            $table->string('teto')->default(0);
            $table->string('cred')->default(0);
            $table->string('implant')->default(0);
            $table->string('repasse')->default(0);
            $table->unsignedBigInteger('ano_id')->nullable();
            $table->foreign('ano_id')->references('id')->on('anos');
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
        Schema::dropIfExists('programa');
    }
}
