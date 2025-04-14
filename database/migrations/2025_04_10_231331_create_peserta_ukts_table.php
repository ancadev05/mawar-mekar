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
        Schema::create('peserta_ukts', function (Blueprint $table) {
            $table->id();
            $table->foreignId('pesilat_id')->constrained();
            $table->foreignId('data_ujian_id')->constrained();
            $table->integer('pembayaran');
            $table->enum('status_pembayaran', ['lunas', 'belum_lunas'])->default('belum_lunas');
            $table->enum('status_ujian', ['lulus', 'mengulang', 'tidak_lulus'])->default('tidak_lulus');
            $table->string('ket')->nullable();
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('peserta_ukts');
    }
};
