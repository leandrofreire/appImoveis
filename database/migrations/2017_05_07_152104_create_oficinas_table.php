<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateoficinasTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('oficinas', function (Blueprint $table) {
            $table->increments('id');
            //Relacionamento de tabela tipo com cidade
            $table->integer('tipo_id')->unsigned();
            $table->foreign('tipo_id')->references('id')->on('tipos');
            //Relacionamento de tabela cidade com tipo
            $table->integer('cidade_id')->unsigned();
            $table->foreign('cidade_id')->references('id')->on('cidades');

            $table->string('titulo');
            $table->string('descricao');
            $table->string('imagem');
            $table->string('endereco');
            $table->string('cep');
            $table->string('detalhes');
            $table->text('mapa')->nullable();
            $table->bigInteger('visualizacoes')->default(0);
            $table->enum('publicar',['sim','nao'])->default('nao');

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
        Schema::dropIfExists('oficinas');
    }
}
