<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateSacolasTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up(){
        Schema::create('sacolas', function (Blueprint $table) {
            $table->integer('id')->autoIncrement();
            $table->string('nome');
            $table->float('valor'); 
            $table->string('categoria');
            $table->integer('produto');
            $table->foreign('produto')->references('id')->on('produtos');
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
        Schema::dropIfExists('sacolas');
    }
}
