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
        Schema::create('saba_masuk_pondoks', function (Blueprint $table) {
            $table->id();
            $table->unsignedBigInteger('saba_id');
            $table->date('tanggal_masuk')->nullable();
            $table->string('asal_sekolah')->nullable();
            $table->string('alamat_asal_sekolah')->nullable();
            $table->string('diterima_dikelas')->nullable();
            $table->integer('no_surat_pindah')->nullable();
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('saba_masuk_pondoks');
    }
};
