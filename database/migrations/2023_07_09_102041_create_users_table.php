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
        Schema::create('users', function (Blueprint $table) {
            $table->id('id');
            $table->string('name','50');
            $table->string('password','100');
            $table->string('email','50')->unique();
            $table->string('phone','20')->nullable();
            $table->string('profile_picture')->nullable();
            $table->date('born')->nullable();
            $table->enum('gender',['L','P'])->nullable();
            $table->enum('role',['1','2','3','4'])->nullable();
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('users');
    }
};
