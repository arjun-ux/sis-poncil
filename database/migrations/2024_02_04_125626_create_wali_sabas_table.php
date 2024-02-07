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
        Schema::create('wali_sabas', function (Blueprint $table) {
            $table->id();
            $table->unsignedBigInteger('saba_id');
            $table->string('nama_wali')->nullable();
            $table->string('kedudukan_dalam_keluarga')->nullable();
            $table->string('alamat_wali')->nullable();
            $table->integer('no_hp_wali')->nullable();
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('wali_sabas');
    }
};
