<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateBookingsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('bookings', function(Blueprint $table) {
          $table->increments('id');
          $table->integer('oficina_id')->unsigned();
          $table->integer('servico_id')->unsigned();
          $table->foreign('oficina_id')->references('id')->on('oficinas');
          $table->foreign('servico_id')->references('id')->on('servicos');
          $table->string('nome');
          $table->string('email');
          $table->string('data');
          $table->string('modelo');
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
        Schema::dropIfExists('bookings');
    }
}
