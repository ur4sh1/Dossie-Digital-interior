<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateDadosMunicipiosTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('dados_municipios', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->string('area_territorial');
            $table->string('densidade_demografica');
            $table->string('linha_reta')->nullable();
            $table->string('linha_fluvial')->nullable();
            $table->string('latitude_decimal')->nullable();
            $table->string('longitude_decimal')->nullable();
            $table->string('latitude_sexagesimais')->nullable();
            $table->string('longitude_sexagesimais')->nullable();
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
        Schema::dropIfExists('dados_municipios');
    }
}
