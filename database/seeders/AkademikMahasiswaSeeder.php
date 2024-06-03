<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\AkademikMahasiswa;

class AkademikMahasiswaSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        AkademikMahasiswa::create([
            'prodi' => 'Teknik Informatika',
            'angkatan' => '2021',
            'semester' => '6',
            'jumlah_mk' => '7',
            'ipk' => '3.75',
            'kelas' => 'Reguler',
            'dospem' => 'Dr. John Doe'
        ]);
    }
}
