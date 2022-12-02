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
        Schema::create('docpos_images', function (Blueprint $table) {
            $table->id();
            $table->unsignedBigInteger('docpos_id');
            $table->string('image');
            $table->foreign('docpos_id')->references('id')->on('docpos')->onDelete('cascade');
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
        Schema::dropIfExists('docpos_images');
    }
};
