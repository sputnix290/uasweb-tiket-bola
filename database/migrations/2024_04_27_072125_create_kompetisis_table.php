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
        Schema::create('kompetisis', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->string('nama_kompetisi', 30)->unique();
            $table->string('tipe_kompetisi', 30);
            $table->string('musim_kompetisi', 20);
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('kompetisis');
    }
};
