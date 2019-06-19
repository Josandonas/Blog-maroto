<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateComentariosTable extends Migration{
    
    public function up(){
        Schema::create('comentarios', function (Blueprint $table) {
            $table->integer('id')->autoIncrement();
            $table->longText('texto_comentario');
            $table->string('autor');
            $table->string('arqui');
            $table->integer('postagem');
            $table->foreign('postagem')->references('id')->on('postagens');
            $table->timestamps();
        });
    }

    public function down(){
        Schema::dropIfExists('comentarios');
    }
}
