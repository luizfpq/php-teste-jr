<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateProdutoDescricao extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('produto_descricao', function (Blueprint $table) {
            $table->id();
            $table->integer('produto_id');
            $table->string('descricao');
            $table->timestamps();
        });

        Schemma::table('produto_descricao', function (Blueprint $table) {
            $table->foreign('produto_id')->references('id')->on('produto');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('produto_descricao');
    }
}
