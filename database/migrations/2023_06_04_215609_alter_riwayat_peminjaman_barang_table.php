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
        Schema::table('riwayat_pembelian_barang', function (Blueprint $table) {
            $table->foreignId('id_user')->references('id_user')->on('users');
            $table->foreignId('id_admin')->references('id_admin')->on('administrator');
            $table->foreignId('id_komplain')->references('id_komplain')->on('komplain');
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        //
    }
};
