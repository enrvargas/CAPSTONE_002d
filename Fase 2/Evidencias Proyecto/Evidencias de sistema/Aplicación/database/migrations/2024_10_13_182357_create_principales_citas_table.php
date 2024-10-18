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
        Schema::create('principales_citas', function (Blueprint $table) {
            $table->id();
            $table->string('nombre');
            $table->string('problema');
            $table->string('direccion');
            $table->string('comuna');
            $table->string('telefono');
            $table->string('fecha_cita');
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
        Schema::dropIfExists('principales_citas');
    }
};
