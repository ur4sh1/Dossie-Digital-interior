<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateDetalhesMunicipiosTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('detalhes_municipios', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->string('populacao_estimada');
            $table->string('pib_percapita');
            $table->string('idh');
            $table->string('pop_plan_saude')->nullable();
            $table->integer('pop_plan_saude_ano')->nullable();
            $table->string('pop_extr_pobreza')->nullable();
            $table->integer('pop_extr_pobreza_ano')->nullable();

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
        Schema::dropIfExists('detalhes_municipios');
    }
}
