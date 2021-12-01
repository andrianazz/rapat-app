<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class DokumentationSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //

        DB::table('dokumentations')->insert(
            [
                'foto' => 'download.jpg',
                'conference_id' => 1,
                'created_at' => '2021-10-22 04:32:15',
                'updated_at' => '2021-10-22 04:32:15',
            ]
        );
    }
}
