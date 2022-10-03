<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateVoleisTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('voleis', function (Blueprint $table) {
            $table->id();
            $table->string('name');
            $table->string('rg');
            $table->string('cpf');
            $table->string('data_nasc');
            $table->string('peso');
            $table->string('altura');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('voleis');
    }
}
