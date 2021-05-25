<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateRecursoFundoNacionalsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('recurso_fundo_nacionals', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->unsignedBigInteger('municipio_id');
            $table->foreign('municipio_id')->references('id')->on('municipios');
            $table->unsignedBigInteger('item_id');
            $table->foreign('item_id')->references('id')->on('item_recurso_fundo_nacionals');
            $table->unsignedBigInteger('tipo_recurso_nacional_id');
            $table->foreign('tipo_recurso_nacional_id')->references('id')->on('tipo_recurso_nacionals');
            $table->decimal('valor',16,2);
            $table->unsignedBigInteger('ano_id');
            $table->foreign('ano_id')->references('id')->on('anos');
            $table->boolean('ativo')->default(true);
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
        Schema::dropIfExists('recurso_fundo_nacionals');
    }
}
