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
        Schema::create('riwayat_pembelian_barang', function (Blueprint $table) {
            $table->id('id_riwayat');
            $table->binary('struk_pembelian');
            $table->string('name',50);
            $table->string('merk',50);
            $table->string('harga',50);
            $table->integer('jumlah');
            $table->integer('masa_garansi');
            $table->date('tgl_pembelian');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('riwayat_pembelian_barang');
    }
};
