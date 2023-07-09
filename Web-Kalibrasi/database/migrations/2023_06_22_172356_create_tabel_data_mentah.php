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
            $table->id();
            $table->integer('no_order');
            $table->decimal('set_poin', 8, 2);
            $table->double('inhomo',8,6);
            $table->double('baca1',8,6);
            $table->double('baca2',8,6);
            $table->double('baca3',8,6);
            $table->double('bacauut1',8,6);
            $table->double('bacauut2',8,6);
            $table->double('bacauut3',8,6);
            $table->double('koreksistd',8,6);
            $table->double('koreksiuut1',8,6)->nullable();
            $table->double('koreksiuut2',8,6)->nullable();
            $table->double('koreksiuut3',8,6)->nullable();
            $table->double('min_std',8,6)->nullable();
            $table->double('min_uut',8,6)->nullable();
            $table->double('max_std',8,6)->nullable();
            $table->double('max_uut',8,6)->nullable();
            $table->double('meanstd',8,6)->nullable();
            $table->double('meanuut',8,6)->nullable();
            $table->double('sd',8,6)->nullable();
            

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
