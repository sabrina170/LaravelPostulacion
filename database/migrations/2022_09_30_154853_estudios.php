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
        Schema::create('estudios', function (Blueprint $table) {
            $table->id();
            $table->string('nombre', 60);
            $table->integer('telefono');
            // $table->integer('dni');
            $table->string('ku', 145);
            $table->string('apellido', 70);
            $table->string('tipo_documento', 40);
            $table->string('numero_documento', 45);
            $table->date('fecha_nacimiento');
            $table->string('sexo', 45);
            $table->string('pais', 45);
            $table->string('departamento', 45);
            $table->string('email', 45);
            $table->string('provincia', 45);
            $table->string('distrito', 45);
            $table->string('direccion', 45);
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
        Schema::dropIfExists('estudios');
    }
};
