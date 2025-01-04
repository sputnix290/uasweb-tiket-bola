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
        Schema::create('gors', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->string('nama_gor', 30)->unique();
            $table->string('lokasi_gor', 50);
            $table->integer('kapasitas_gor')->default(20);
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('gors');
    }
};
