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
            $table->string('nama', 100);
            $table->string('email')->unique();
            $table->string('password');
            $table->char('no_telepon', 12)->nullable();
            $table->text('alamat')->nullable();
            $table->enum('jenis_kelamin', ['pria', 'wanita'])->nullable();
            $table->enum('status', ['menikah', 'lajang'])->nullable();
            $table->string('pekerjaan')->nullable();
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
