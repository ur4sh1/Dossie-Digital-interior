<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateRecursoFundoEstadualsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('recurso_fundo_estaduals', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->unsignedBigInteger('municipio_id');
            $table->foreign('municipio_id')->references('id')->on('municipios');
            $table->unsignedBigInteger('item_recurso_fundo_estadual_id');
            $table->foreign('item_recurso_fundo_estadual_id')->references('id')->on('item_recurso_fundo_estaduals')->onDelete('cascade');
            $table->string('referencia')->nullable();
            $table->string('qtd')->nullable();
            $table->decimal('valor',16,2);
            $table->string('parcela')->nullable();
            $table->unsignedBigInteger('ano_id');
            $table->foreign('ano_id')->references('id')->on('anos');
            $table->boolean('ativo')->default(true);
            $table->timestamps();

            $table->unique(['municipio_id', 'item_recurso_fundo_estadual_id','ano_id'],'unico');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('recurso_fundo_estaduals');
    }
}
