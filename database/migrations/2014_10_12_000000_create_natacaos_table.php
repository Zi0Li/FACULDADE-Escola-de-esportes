<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateNatacaosTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('natacaos', function (Blueprint $table) {
            $table->id();
            $table->string('name');
            $table->string('rg');
            $table->string('cpf');
            $table->string('data_nasc');
            $table->string('sabe_nadar');
            $table->string('modalidade');
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
