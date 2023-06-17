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
        Schema::create('info-uut', function (Blueprint $table) {
            $table->integer('no_order')->unique();
            $table->string('pemilik')->primary();
            $table->string('alamat');
            $table->string('nama_uut')->unique();
            $table->string('merek');
            $table->string('tipe');
            $table->string('no_seri');
            $table->decimal('resolusi_uut');
            $table->date('tgl_test');
            $table->string('tempat_test');
            $table->decimal('suhu_ruang');
            $table->decimal('kelembaban');
            $table->decimal('tekanan');
        });
        
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('info__u_u_t');
    }
};
