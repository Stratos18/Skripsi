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
        Schema::create('data_mentahs', function (Blueprint $table) {
            $table->id('no');
            $table->integer('id');
            $table->foreign('id')->references('no_order')->on('info_uuts');
            $table->decimal('set_poin', 8, 2);
            $table->double('baca1',8,6);
            $table->double('baca2',8,6);
            $table->double('baca3',8,6);
            $table->double('bacauut1',8,6);
            $table->double('bacauut2',8,6);
            $table->double('bacauut3',8,6);
            $table->double('koreksistd',8,6);
            $table->double('koreksiuut',8,6);
            $table->timestamp('added_at')->unique();

        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('tabel_data_mentah');
    }
};
