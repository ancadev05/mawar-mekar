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
        Schema::create('nilai_ukts', function (Blueprint $table) {
            $table->id();
            $table->foreignId('peserta_ukt_id')->constrained();
            $table->integer('alislam_kemuhammadiyaan');
            $table->integer('pengetahuan_organisasi');
            $table->integer('kesehatann_olahraga');
            $table->integer('ilmu_pencak_silat');
            $table->integer('pembinaan_fisik_mental');
            $table->integer('total');
            $table->string('ket')->nullable();
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('nilai_ukts');
    }
};
