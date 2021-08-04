<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateInternacaosTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('internacaos', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->unsignedBigInteger('ano_id');
            $table->foreign('ano_id')->references('id')->on('anos');
            $table->unsignedBigInteger('hospital_id');
            $table->foreign('hospital_id')->references('id')->on('hospitals')->onDelete('cascade');
            $table->integer('media_dia')->nullable();
            $table->integer('media_mes')->nullable();
            $table->string('fonte')->nullable();
            $table->timestamps();

            $table->unique(['ano_id','hospital_id'],'unico');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('internacaos');
    }
}
