<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateFutebolsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('futebols', function (Blueprint $table) {
            $table->id();
            $table->string('name');
            $table->string('rg');
            $table->string('cpf');
            $table->string('data_nasc');
            $table->string('perna_dominante');
            $table->string('posicao');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('futebols');
    }
}
