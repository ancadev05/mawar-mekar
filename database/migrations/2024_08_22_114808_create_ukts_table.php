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
        Schema::create('ukts', function (Blueprint $table) {
            $table->id();
            $table->string('tempat');
            $table->string('alamat')->nullable();
            $table->date('tgl_awal');
            $table->date('tgl_akhir');
            $table->string('jenis_ukt')->nullable();
            $table->text('ket')->nullable();
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('ukts');
    }
};
