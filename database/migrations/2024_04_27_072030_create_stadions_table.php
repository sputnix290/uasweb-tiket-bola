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
        Schema::create('stadions', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->string('nama_stadion', 30)->unique();
            $table->string('lokasi_stadion', 50);
            $table->integer('kapasitas_stadion')->default(20);
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('stadions');
    }
};
