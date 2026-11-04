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
    Schema::create('prospek_pelanggans', function (Blueprint $table) {
        $table->id();
        $table->string('nama');
        $table->string('nama_perusahaan')->nullable();
        $table->string('email')->nullable();
        $table->string('telepon')->nullable();
        $table->string('sumber_prospek');
        $table->string('status')->default('baru');
        $table->date('tanggal_tindak_lanjut')->nullable();
        $table->text('catatan')->nullable();
        $table->timestamps();
    });
}

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('prospek_pelanggans');
    }
};
