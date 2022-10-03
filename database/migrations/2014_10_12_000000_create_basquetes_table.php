<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateBasquetesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('basquetes', function (Blueprint $table) {
            $table->id();
            $table->string('name');
            $table->string('rg');
            $table->string('cpf');
            $table->string('data_nasc');
            $table->string('peso');
            $table->string('altura');
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
        Schema::dropIfExists('natacaos');
    }
}
