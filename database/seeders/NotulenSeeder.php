<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class NotulenSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //
        DB::table('notulens')->insert([
            'conference_id' => 1,
            'created_at' => '2021-10-22 04:32:15',
            'updated_at' => '2021-10-22 04:32:15',
        ]);

        DB::table('notulens')->insert([
            'conference_id' => 2,
            'created_at' => '2021-10-22 04:32:15',
            'updated_at' => '2021-10-22 04:32:15',
        ]);
    }
}
