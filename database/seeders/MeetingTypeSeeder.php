<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class MeetingTypeSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //

        DB::table('meeting_types')->insert([
            'jenis' => 'Rapat HRD',
            'status' => 'Aktif',
            'created_at' => '2021-10-22 04:32:15',
            'updated_at' => '2021-10-22 04:32:15'
        ]);

        DB::table('meeting_types')->insert([
            'jenis' => 'Rapat Prodi',
            'status' => 'Aktif',
            'created_at' => '2021-10-22 04:32:15',
            'updated_at' => '2021-10-22 04:32:15'
        ]);
    }
}
