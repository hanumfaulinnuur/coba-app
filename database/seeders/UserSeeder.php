<?php

namespace Database\Seeders;

use App\Models\user;
use Illuminate\Database\Seeder;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;

class UserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */

    public function run(): void
    {
        $user = new user();
        $user->nama             = 'Hanum Faulinnuur';
        $user->email            = 'hanumfaulinnuur@gmail.com';
        $user->password         = 'admin123';
        $user->no_telepon       = '098766567655';
        $user->alamat           = 'pandan kembiritan genteng';
        $user->jenis_kelamin    = 'wanita';
        $user->status           = 'lajang';
        $user->pekerjaan        = 'pelajar';
        $user->save();
    }
}
