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
        Schema::create('tiket_futsals', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->unsignedBigInteger('id_jadwal_futsal');
            $table->enum('kategori_tiket', ['Ekonomi', 'VIP', 'VVIP']);
            $table->integer('harga_tiket');
            $table->timestamps();

            $table->foreign('id_jadwal_futsal')->references('id')->on('jadwal_futsals');
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('tiket_futsals');
    }
};
