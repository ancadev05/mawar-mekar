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
        Schema::create('siswas', function (Blueprint $table) {
            $table->id();
            $table->string('no_registrasi');
            $table->string('nik')->nullable();
            $table->string('nama_siswa');
            $table->string('tempat_lahir');
            $table->date('tgl_lahir');
            $table->string('agama');
            $table->text('alamat');
            $table->string('no_hp')->nullable();
            $table->string('tingkat_pendidikan')->nullable();
            $table->string('gelar_akademik')->nullable();
            $table->string('asal_sekolah_instansi')->nullable();
            $table->string('nama_ayah');
            $table->string('nama_ibu');
            $table->string('pekerjaan_ayah')->nullable();
            $table->string('pekerjaan_ibu')->nullable();
            $table->string('hp_orangtua_wali')->nullable();
            $table->text('alamat_orangtua_wali')->nullable();
            $table->string('tahun_masuk_ts');
            $table->string('jenjang');
            $table->foreignId('cabang_id')->constrained();
            $table->foreignId('unit_id')->constrained();
            $table->foreignId('tingkatan_id')->constrained();
            $table->string('ukts_terakhir');
            $table->text('ket');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('siswas');
    }
};
