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
        Schema::create('tiket_sepak_bolas', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->unsignedBigInteger('id_jadwal_sepak_bola');
            $table->enum('kategori_tiket', ['Ekonomi', 'VIP', 'VVIP']);
            $table->integer('harga_tiket');
            $table->timestamps();

            $table->foreign('id_jadwal_sepak_bola')->references('id')->on('jadwal_sepak_bolas');
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('tiket_sepak_bolas');
    }
};
