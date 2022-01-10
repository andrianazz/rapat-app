<?php

namespace Database\Seeders;

use App\Models\Conference;
use App\Models\Dokumentation;
use App\Models\JenisRapat;
use App\Models\MeetingType;
use App\Models\Notulen;
use App\Models\People;
use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        // \App\Models\User::factory(10)->create();
        $this->call(MeetingTypeSeeder::class);
        $this->call(RoomSeeder::class);
        $this->call(ConferenceSeeder::class);
        $this->call(NotulenSeeder::class);
        $this->call(DokumentationSeeder::class);
        $this->call(ParticipantSeeder::class);
        $this->call(UserSeeder::class);
    }
}
