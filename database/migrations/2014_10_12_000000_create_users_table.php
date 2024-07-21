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
            $table->char('nik', 16)->nullable();
            $table->string('name');
            $table->string('email')->nullable();
            $table->char('phone_number', 13);
            $table->char('kota', 15)->nullable();
            $table->char('kelurahan', 15)->nullable();
            $table->char('kecamatan', 15)->nullable();
            $table->string('password');
            $table->string('roles');
            $table->string('tps');
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
