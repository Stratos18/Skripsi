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
        Schema::create('tabel_hitungs', function (Blueprint $table) {
            $table->id();
            $table->integer('no_order');
            $table->integer('setpoint');
            $table->double('std',8,4)->nullable();
            $table->double('uut',8,4)->nullable();
            $table->double('ui',8,6)->nullable();
            $table->double('u2',8,6)->nullable();
            $table->double('u3',8,6)->nullable();
            $table->double('u4',8,6)->nullable();
            $table->double('u5',8,6)->nullable();
            $table->double('u6',8,6)->nullable();
            $table->double('u7',8,6)->nullable();
            $table->double('ci',8,6)->nullable();
            $table->double('ugab',8,6)->nullable();
            $table->double('veff',8,6)->nullable();
            $table->double('u95',8,6)->nullable();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('tabel_hitung');
    }
};
