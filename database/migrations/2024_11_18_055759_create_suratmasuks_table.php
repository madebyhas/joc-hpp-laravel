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
        Schema::create('suratmasuk', function (Blueprint $table) {
            $table->id('id_sm');
            $table->date('tgl_diterima');
            $table->string('no_surat');
            $table->date('tgl_surat');
            $table->string('asal_surat');
            $table->text('perihal');
            $table->string('tujuan_dispo');
            $table->string('lampiran')->nullable();
            $table->foreignId('id_pegawai')->constrained('pegawai', 'id_pegawai')->onDelete('cascade');
            
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('suratmasuk');
    }
};
