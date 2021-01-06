<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreatePersonaTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('persona', function (Blueprint $table) {
            $table->integer('ci')->unique()->primary();
            $table->string('nombre');
            $table->string('apellidos');
            $table->char('sexo');
            $table->date('fecha_nac');
        });
    }

    public function down()
    {
        Schema::dropIfExists('persona');
    }
}
