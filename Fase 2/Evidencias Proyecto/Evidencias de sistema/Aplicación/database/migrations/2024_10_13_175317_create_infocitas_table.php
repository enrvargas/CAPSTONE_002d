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
        Schema::create('infocitas', function (Blueprint $table) {
            $table->id();
            $table->string('nombre');
            $table->text('problema');
            $table->string('direccion');
            $table->string('comuna');
            $table->string('telefono');
            $table->string('fecha_cita');
            $table->string('evidencias')->nullable();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('infocitas');
    }
};
