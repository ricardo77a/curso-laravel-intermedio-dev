<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateBecariosTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('becarios', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->string('apellido_paterno');
            $table->string('apellido_materno')->nullable();
            $table->string('nombre')->nullable();
            $table->string('area_del_conocimiento');
            $table->string('nivel');
            $table->string('institucion');
            $table->string('entidad_destino');
            $table->string('sexo');
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
        Schema::dropIfExists('becarios');
    }
}
