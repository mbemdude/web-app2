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
        Schema::create('spps', function (Blueprint $table) {
            $table->id();
            $table->string('no_transaksi')->unique()->nullable(false);
            $table->dateTime('tgl_transaksi');
            $table->string('santri_nis');
            $table->foreign('santri_nis')
                ->references('nis')
                ->on('santris');
            $table->double('jumlah_pembayaran');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('spps');
    }
};
