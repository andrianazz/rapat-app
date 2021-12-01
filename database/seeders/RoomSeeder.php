<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class RoomSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //

        DB::table('rooms')->insert([
            'nama' => 'Kenanga',
            'deskripsi' => 'Ruang Kenanga Kantor Gubernur Riau Jl. Jend. Sudirman No. 460, Pekanbaru',
            'created_at' => '2021-10-22 04:32:15',
            'updated_at' => '2021-10-22 04:32:15',
        ]);

        DB::table('rooms')->insert([
            'nama' => 'Melati',
            'deskripsi' => 'Ruang Melati Kantor Gubernur Riau Jl. Jend. Sudirman No. 460, Pekanbaru',
            'created_at' => '2021-10-22 04:32:15',
            'updated_at' => '2021-10-22 04:32:15',
        ]);
    }
}
