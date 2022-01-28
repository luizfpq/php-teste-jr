<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateProdutoImagem extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('produto_imagem', function (Blueprint $table) {
            $table->id();
            $table->integer('produto_id');
            $table->string('caminho_imagem');
            $table->timestamps();
        });

        Schema::table('produto_imagem', function(Blueprint $table) {
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
        Schema::dropIfExists('produto_imagem');
    }
}
