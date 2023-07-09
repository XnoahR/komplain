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
        Schema::create('komplain', function (Blueprint $table) {
            $table->id('id');
            $table->bigInteger('id_user')->unsigned();
            $table->bigInteger('id_admin')->unsigned();
            $table->bigInteger('id_rpb')->unsigned();
            $table->enum('status',['1','2','3','4','5']);//'pending','dikirim','diproses','ditolak','disetujui'
            $table->date('date_send');
            $table->date('date_done')->nullable();
            $table->timestamps();
            $table->foreign('id_user')->references('id')->on('users');
            $table->foreign('id_admin')->references('id')->on('users');
            $table->foreign('id_rpb')->references('id')->on('riwayat_pembelian_barang');
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('komplain');
    }
};