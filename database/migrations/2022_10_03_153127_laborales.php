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
        Schema::create('laborales', function (Blueprint $table) {
            $table->id();
            $table->string('callcenter', 150);
            $table->string('empresa', 150);
            $table->string('puesto', 70);
            $table->string('tiempo', 70);
            $table->string('tipo', 70);
            $table->string('konecta', 10);
            $table->string('ku', 75);
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
        Schema::dropIfExists('laborales');
    }
};
