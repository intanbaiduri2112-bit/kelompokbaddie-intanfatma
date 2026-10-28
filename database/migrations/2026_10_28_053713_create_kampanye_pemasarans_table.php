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
    Schema::create('kampanye_pemasarans', function (Blueprint $table) {
        $table->id();
        $table->string('nama_kampanye');
        $table->string('jenis_kampanye');
        $table->text('target_audiens')->nullable();
        $table->decimal('anggaran', 15, 2)->default(0);
        $table->date('tanggal_mulai');
        $table->date('tanggal_selesai');
        $table->string('status')->default('direncanakan');
        $table->text('deskripsi')->nullable();
        $table->timestamps();
    });
}

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('kampanye_pemasarans');
    }
};
