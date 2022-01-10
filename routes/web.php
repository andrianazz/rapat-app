<?php

use App\Http\Controllers\ConferenceController;
use App\Http\Controllers\DokumentationController;
use App\Http\Controllers\LoginController;
use App\Http\Controllers\MeetingTypeController;
use App\Http\Controllers\NotulenController;
use App\Http\Controllers\ParticipantController;
use App\Http\Controllers\PeopleController;
use App\Http\Controllers\RoomController;
use App\Models\Conference;
use App\Models\Dokumentation;
use App\Models\Participant;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

//Login
Route::get('/login', [LoginController::class, 'index'])->name('login');
Route::post('/login/auth', [LoginController::class, 'login']);
Route::get('/logout', [LoginController::class, 'logout'])->name('logout');

//Middleware
Route::group(
    ['middleware' => 'auth'],
    function () {
        //Index Dashboard
        Route::get('/', function () {
            $data = Conference::latest()->get();

            return view('dashboard', [
                'title' => 'Dashboard',
                'name' => 'Andrian Wahyu',
                'data' => $data,
            ]);
        });


        //Jenis Rapat
        Route::get('/jenis-rapat', [MeetingTypeController::class, 'index'])->name('jenisRapat');
        Route::post('/add-jenis-rapat', [MeetingTypeController::class, 'addJenisRapat'])->name('addJenisRapat');
        Route::get('/delete-rapat/{id}', [MeetingTypeController::class, 'delJenisRapat'])->name('delJenisRapat');

        //Ruangan


        //Rapat
        Route::get('/rapat', [ConferenceController::class, 'index'])->name('rapat');
        Route::get('/tambah-rapat', [ConferenceController::class, 'tambahRapat'])->name('tambahRapat');
        Route::post('/add-rapat', [ConferenceController::class, 'addRapat'])->name('addRapat');
        Route::get('/edit-rapat/{id}', [ConferenceController::class, 'editRapat'])->name('editRapat');
        Route::post('/update-rapat/{id}', [ConferenceController::class, 'updateRapat'])->name('updateRapat');
        Route::post('/delete-rapat/{id}', [ConferenceController::class, 'deleteRapat'])->name('deleteRapat');

        //DetailPeserta
        Route::get('/detail-peserta/{id}', [ParticipantController::class, 'index'])->name('detailPeserta');
        Route::get('/tambah-peserta/{id}', [ParticipantController::class, 'tambahPeserta'])->name('tambahPeserta');
        Route::post('/delete-peserta/{id}', [ParticipantController::class, 'deletePeserta'])->name('deletePeserta');
        Route::post('/add-peserta', [ParticipantController::class, 'addPeserta'])->name('addPeserta');

        //Dokumentasi
        Route::post('/add-foto', [DokumentationController::class, 'addFoto'])->name('addFoto');
        Route::post('/delete-foto/{id}', [DokumentationController::class, 'deleteFoto'])->name('deleteFoto');


        //Rapat Berjalan
        Route::get('/rapat-berjalan', [ConferenceController::class, 'rapatBerjalan'])->name('rapatBerjalan');
        Route::get('/notulen/{id}', [NotulenController::class, 'index'])->name('notulen');
        Route::post('/update-notulen', [NotulenController::class, 'updateNotulen'])->name('updateNotulen');
        Route::post('/done-rapat/{id}', [ConferenceController::class, 'doneRapat'])->name('doneRapat');


        //Deskripsi Rapat
        Route::get('/detail-rapat/{id}', [ParticipantController::class, 'detailRapat'])->name('detailRapat');

        //Rapat Selesai
        Route::get('/rapat-selesai', [ConferenceController::class, 'rapatSelesai'])->name('rapatSelesai');
        Route::get('/detail-selesai/{id}', [ParticipantController::class, 'detailSelesai'])->name('detailSelesai');
        Route::get('/notulenSelesai/{id}/edit', [NotulenController::class, 'editNotulenSelesai'])->name('notulenSelesai');

        //Ruangan
        Route::get('/ruangan', [RoomController::class, 'index'])->name('room');
        Route::post('/add-ruangan', [RoomController::class, 'addRuangan'])->name('addRuangan');
        Route::get('/delete-ruangan/{id}', [RoomController::class, 'delRuangan'])->name('delRuangan');

        //Peserta
        Route::get('/people', [PeopleController::class, 'index'])->name('people');
        Route::post('/add-people', [PeopleController::class, 'addPeople'])->name('addPeople');
        Route::post('/delete-people/{id}', [PeopleController::class, 'delPeople'])->name('delPeople');

        //Laporan
        Route::get('/cetak-notulen/{id}', [ParticipantController::class, 'cetakNotulen2'])->name('cetakNotulen2');
        Route::get('/hadir/{id}', [ParticipantController::class, 'cetakHadir2'])->name('cetakHadir2');
        Route::get('/dokumentasi/{id}', [DokumentationController::class, 'cetakDokumen'])->name('cetakDokumen');

        // Route::get('/cetak-hadir/{id}', [ParticipantController::class, 'cetakHadir'])->name('cetakHadir');
        // Route::get('/cetak-notulen', [ParticipantController::class, 'cetakNotulen'])->name('cetakNotulen');
    }
);
