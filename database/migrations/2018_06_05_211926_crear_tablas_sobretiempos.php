<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CrearTablasSobretiempos extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('sobretiempos', function (Blueprint $table) {
            $table->increments('id');
            $table->timestamps();
            $table->string('fecha');
            $table->string('hora_de_entrada');
            $table->string('hora_de_salida');
            $table->string('tiempo');
            $table->string('cod_trabajador');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('sobretiempos');
    }
}
