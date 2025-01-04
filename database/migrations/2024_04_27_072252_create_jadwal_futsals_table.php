<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     */
    public function up(): void
    {
        Schema::create('jadwal_futsals', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->unsignedBigInteger('id_tim_home');
            $table->unsignedBigInteger('id_tim_away');
            $table->unsignedBigInteger('id_kompetisi');
            $table->date('tanggal');
            $table->time('waktu_mulai');
            $table->unsignedBigInteger('id_gor');
            $table->timestamps();

            $table->foreign('id_tim_home')->references('id')->on('tim_homes');
            $table->foreign('id_tim_away')->references('id')->on('tim_aways');
            $table->foreign('id_kompetisi')->references('id')->on('kompetisis');
            $table->foreign('id_gor')->references('id')->on('gors');
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('jadwal_futsals');
    }
};
