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
        Schema::create('bookings', function (Blueprint $table) {
            $table->id(); 
            $table->unsignedBigInteger('id_user');
            $table->unsignedBigInteger('id_kamar');
            $table->integer('jumlah_penghuni');
            $table->string('foto_ktp');
            $table->integer('lama_sewa');
            $table->integer('total_harga_sewa');
            $table->enum('metode_pembayaran', ['cash', 'm-banking', 'e-wallet']);
 
            $table->timestamps();

            $table->foreign('id_user')->references('id')->on('users');
            $table->foreign('id_kamar')->references('id')->on('kamars');

        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('bookings');
    }
};
