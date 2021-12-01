<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class ConferenceSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('conferences')->insert([
            'kode_rapat' => 'HRD-001',
            'rapat_mulai' => '2021-10-22 04:32:15',
            'rapat_selesai' => '2021-10-22 07:32:15',
            'status' => 'Proses',
            'nama' => 'Rapat Pemecah Kepala Silver Fang',
            'pengisi' => 'Wira Silver Fang',
            'tema' => 'Rapat dalam pembentukan anggota Silver Fang yang baru',
            'created_at' => '2021-10-22 04:32:15',
            'updated_at' => '2021-10-22 04:32:15',
            'meeting_type_id' => 1,
            'room_id' => 1,
        ]);

        DB::table('conferences')->insert([
            'kode_rapat' => 'RPD-001',
            'rapat_mulai' => '2021-10-22 04:32:15',
            'rapat_selesai' => '2021-10-22 07:32:15',
            'status' => 'Proses',
            'nama' => 'Rapat Prodi Teknik Informatika',
            'pengisi' => 'Andrian Wahyu',
            'tema' => 'Rapat dalam pembentukan anggota Silver Fang yang baru',
            'created_at' => '2021-10-22 04:32:15',
            'updated_at' => '2021-10-22 04:32:15',
            'meeting_type_id' => 2,
            'room_id' => 1,
        ]);
    }
}
