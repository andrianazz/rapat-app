<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Hash;

class UserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {

        DB::table('users')->insert([
            'name' => 'Wirasatria Putra',
            'username' => 'wira1',
            'email' => 'wira@gmail.com',
            'password' => Hash::make('admin'),
            'created_at' => '2021-10-22 04:32:15',
            'updated_at' => '2021-10-22 04:32:15',
        ]);

        DB::table('users')->insert([
            'name' => 'Andrian Wahyu',
            'username' => 'andrian1',
            'email' => 'andrian@gmail.com',
            'password' => Hash::make('andrian1'),
            'created_at' => '2021-10-22 04:32:15',
            'updated_at' => '2021-10-22 04:32:15',
        ]);
    }
}
