<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class ParticipantSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('participants')->insert([
            'nama' => 'Muhammad Rakha',
            'divisi' => 'Pembangunan',
            'jabatan' => 'Kepala bagian',
            'conference_id' => 1,
            'created_at' => '2021-10-22 04:32:15',
            'updated_at' => '2021-10-22 04:32:15',
        ]);

        DB::table('participants')->insert([
            'nama' => 'Muhammad Ridha',
            'divisi' => 'Organisasi',
            'jabatan' => 'Kepala Biro',
            'conference_id' => 2,
            'created_at' => '2021-10-22 04:32:15',
            'updated_at' => '2021-10-22 04:32:15',
        ]);
    }
}
