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
        Schema::create('pesan_tiket_futsals', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->unsignedBigInteger('id_tiket_futsal');
            $table->unsignedBigInteger('id_pengguna');
            $table->date('tanggal_pesan');
            $table->integer('jumlah_pesan');
            $table->timestamps();

            $table->foreign('id_tiket_futsal')->references('id')->on('tiket_futsals');
            $table->foreign('id_pengguna')->references('id')->on('penggunas');
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('pesan_tiket_futsals');
    }
};
