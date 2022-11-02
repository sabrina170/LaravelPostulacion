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
        Schema::create('infos', function (Blueprint $table) {
            $table->id();
            // id de user
            $table->unsignedBigInteger('user_id');
            // ------------------------------
            $table->string('nombres', 60);
            $table->string('apellido_pa', 40);
            $table->string('apellido_ma', 40);
            $table->string('tipo_documento', 40);
            $table->string('numero_documento', 45);
            $table->string('correo', 45);
            $table->integer('telefono');
            $table->date('fecha_nacimiento');
            $table->string('sexo', 45);
            $table->string('pais', 45);
            $table->string('departamento', 45);
            $table->string('provincia', 45);
            $table->string('distrito', 45);
            $table->string('direccion', 45);

            // estudios
            $table->string('grado', 60);
            $table->string('nombre_ie', 70);
            $table->string('estudia', 70);
            $table->string('horario', 70);
            $table->string('disponibilidad', 70);
            //fin estudios

            // laborales
            $table->string('callcenter', 150);
            $table->string('empresa', 150);
            $table->string('puesto', 70);
            $table->string('tiempo', 70);
            $table->string('tipo_expe', 70);
            $table->string('konecta', 10);
            // fin laborales
            $table->foreign('user_id')->references('id')->on('users')->onDelete('cascade');
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
        Schema::dropIfExists('infos');
    }
};
