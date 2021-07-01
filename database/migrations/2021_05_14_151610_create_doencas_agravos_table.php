<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateDoencasAgravosTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('doencas_agravos', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->unsignedBigInteger('municipio_id');
            $table->foreign('municipio_id')->references('id')->on('municipios');
            $table->unsignedBigInteger('doenca_id');
            $table->foreign('doenca_id')->references('id')->on('doencas');
            $table->unsignedBigInteger('ano_id');
            $table->foreign('ano_id')->references('id')->on('anos');
            $table->string('casos')->default(0);
            $table->string('fonte')->nullable();
            $table->timestamps();

            $table->unique(['doenca_id','ano_id','municipio_id'],'unico');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('doencas_agravos');
    }
}
