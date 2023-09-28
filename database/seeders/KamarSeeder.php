<?php

namespace Database\Seeders;

use App\Models\kamar;
use Illuminate\Database\Seeder;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;

class KamarSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */

    
    public function run(): void
    {
        $kamar = new kamar();
        $kamar->jenis_kamar     = 'single';
        $kamar->fasilitas_kamar = 'tv, ac, kamar mandi dalam, dll';
        $kamar->harga_bulanan   = 500000;
        $kamar->kamar_tersedia  = 3;
        $kamar->foto_kamar      = 'gambar.jpg';
        $kamar->save();

        
    }
}
