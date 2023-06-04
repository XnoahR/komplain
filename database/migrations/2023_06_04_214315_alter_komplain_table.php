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
        Schema::table('komplain', function (Blueprint $table) {
            $table->foreignId('id_user')->references('id_user')->on('users');
            $table->foreignId('id_manajer')->references('id_manajer')->on('manajer');
            $table->foreignId('id_penugasan')->references('id_penugasan')->on('penugasan');
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
