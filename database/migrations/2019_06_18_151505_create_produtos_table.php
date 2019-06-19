<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateProdutosTable extends Migration{

    public function up(){
        Schema::create('produtos', function (Blueprint $table) {
            $table->integer('id')->autoIncrement();
            $table->string('nome');
            $table->string('arquivo');
            $table->float('valor');          
            $table->string('marca');
            $table->string('modelo');
            $table->string('material');
            $table->string('desenho');
            $table->string('Categoria');
            $table->integer('cliente');
            $table->foreign('cliente')->references('id')->on('users');
            $table->timestamps();
        });
    }

    public function down(){
        Schema::dropIfExists('produtos');
    }
}
