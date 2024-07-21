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
            $table->id();
            $table->integer('nik')->nullable();
            $table->string('name');
            $table->string('email')->nullable();
            $table->integer('phone_number');
            $table->integer('kota')->nullable();
            $table->integer('kelurahaan')->nullable();
            $table->string('kecamataan')->nullable();
            $table->string('password');
            $table->string('roles');
            $table->rememberToken();
            $table->string('profile_photo_path', 2048)->nullable();
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
