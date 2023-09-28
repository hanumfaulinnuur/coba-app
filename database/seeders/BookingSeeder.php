<?php

namespace Database\Seeders;

use App\Models\booking;
use Illuminate\Database\Seeder;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;

class BookingSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */


    public function run(): void
    {
        $booking = new booking();
        $booking->id_user           = 1;
        $booking->id_kamar          = 1;
        $booking->jumlah_penghuni   = 2;
        $booking->foto_ktp          = 'ktp.png';
        $booking->lama_sewa         = 4;
        $booking->total_harga_sewa  = 2000000;
        $booking->metode_pembayaran = 'cash';
        $booking->save();
    }
}
