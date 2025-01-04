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
        Schema::create('pesan_tiket_sepak_bolas', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->unsignedBigInteger('id_tiket_sepak_bola');
            $table->unsignedBigInteger('id_pengguna');
            $table->date('tanggal_pesan');
            $table->integer('jumlah_pesan');
            $table->timestamps();

            $table->foreign('id_tiket_sepak_bola')->references('id')->on('tiket_sepak_bolas');
            $table->foreign('id_pengguna')->references('id')->on('penggunas');
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('pesan_tiket_sepak_bolas');
    }
};
