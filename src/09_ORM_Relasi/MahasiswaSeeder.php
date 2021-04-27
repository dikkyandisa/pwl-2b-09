<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
class MahasiswaSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('mahasiswa')->insert ([
            'Nim' => '1941720051',
            'Nama' => 'Dikky Andisa',
            'Jurusan' => 'JTI',
            'No_Handphone' => '085853979885',
            'kelas_id'=> 2
        ]);    
    }
}
