<?php

use App\Models\MeetingType;
use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateConferencesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('conferences', function (Blueprint $table) {
            $table->id();
            $table->string('kode_rapat');
            $table->dateTime('rapat_mulai');
            $table->dateTime('rapat_selesai');
            $table->string('nama');
            $table->enum('status', ['Proses', 'Selesai', 'Pending']);
            $table->string('pengisi');
            $table->text('tema');
            $table->foreignId('meeting_type_id');
            $table->foreignId('room_id');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('conferences');
    }
}
