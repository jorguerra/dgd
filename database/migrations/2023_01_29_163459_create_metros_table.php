<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('metros', function (Blueprint $table) {
            $table->id();
            $table->bigInteger('id_comuna')->unsigned();
            $table->foreign('id_comuna')->on('comunas')->references('id')->onDelete('cascade')->onUpdate('cascade');
            $table->string('codigo',3);
            $table->string('entidad');
            $table->string('nombre');
            $table->string('direccion');
            $table->string('horario');
            $table->float('este', 8, 20);
            $table->float('norte', 8, 20);
            $table->float('latitud',8,50);
            $table->float('longitud',8,50);
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
        Schema::dropIfExists('metros');
    }
};
