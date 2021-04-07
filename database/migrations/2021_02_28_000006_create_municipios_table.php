<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateMunicipiosTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('municipios', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->string('nome')->unique();
            $table->unsignedBigInteger('regional_id');
            $table->foreign('regional_id')->references('id')->on('regionals');
            $table->unsignedBigInteger('dados_id');
            $table->foreign('dados_id')->references('id')->on('dados_municipios');
            $table->unsignedBigInteger('detalhes_id');
            $table->foreign('detalhes_id')->references('id')->on('detalhes_municipios');
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
        Schema::dropIfExists('municipios');
    }
}
