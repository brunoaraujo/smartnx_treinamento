<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateProdutosTable extends Migration
{
    public function up()
    {
        Schema::create('produtos', function (Blueprint $table) {
            $table->increments('prd_id');

            $table->integer('prd_cat_id')->unsigned();
            $table->foreign('prd_cat_id')->references('cat_id')->on('categorias');

            $table->string('prd_nome');
            $table->integer('prd_qtd')->default(0);
            $table->longText('prd_descricao')->nullable();

            $table->timestamps();
        });
    }

    public function down()
    {
        Schema::dropIfExists('produtos');
    }
}
