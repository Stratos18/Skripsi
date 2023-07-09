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
        Schema::create('alat_standars', function (Blueprint $table) {
            $table->string('nama_alatstd')->unique();
            $table->string('merek_std')->nullable();
            $table->string('tipe_std')->nullable();
            $table->string('no_seristd')->nullable();
            $table->string('no_sertifstd')->primary();
            $table->string('sertifstd')->nullable();
            $table->string('daerah_ukurstd')->nullable();
            $table->string('resolusi_std')->nullable();
            $table->string('uc_std')->nullable();
            $table->string('Udriff')->nullable();
            $table->string('media')->nullable();
            $table->string('metoda')->nullable();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('alat_standars');
    }
};
