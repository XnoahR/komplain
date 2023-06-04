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
        Schema::table('penugasan', function (Blueprint $table) {
            $table->foreignId('id_admin_garansi')->references('id_admin_garansi')->on('admin_garansi');
        });
        Schema::table('admin_garansi', function (Blueprint $table) {
            $table->foreignId('id_admin')->references('id_admin')->on('administrator');
        });
        Schema::table('administrator', function (Blueprint $table) {
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
