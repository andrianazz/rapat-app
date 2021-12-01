<?php

namespace App\Http\Controllers;

use App\Models\Conference;
use App\Models\MeetingType;
use App\Models\Notulen;
use App\Models\Room;
use Illuminate\Http\Request;

class ConferenceController extends Controller
{
    //
    public function index()
    {
        $data = Conference::latest()->get();
        return view('rapat.rapat', [
            'title' => 'Data Rapat',
            'name' => 'Andrian Wahyu',
            'data' => $data,
        ]);
    }


    public function addRapat(Request $request)
    {

        $validateData = $request->validate([
            'kode_rapat' => 'required',
            'rapat_mulai' => 'required',
            'rapat_selesai' => 'required',
            'nama' => 'required',
            'pengisi' => 'required',
            'tema' => 'required',
        ]);

        Conference::create($request->all());

        $lasted = Conference::latest()->first();


        Notulen::create([
            'conference_id' => $lasted->id,
        ]);

        return redirect()->route('rapat');
    }

    public function tambahRapat()
    {

        $tipe = MeetingType::all();
        $room = Room::all();


        return view('rapat.tambahRapat', [
            'title' => 'Tambah Rapat',
            'name' => 'Andrian Wahyu',
            'tipe' => $tipe,
            'room' => $room,
        ]);
    }

    public function editRapat($id)
    {
        $tipe = MeetingType::all();
        $data = Conference::find($id);
        $room = Room::all();

        // dd($data);

        return view('rapat.editRapat', [
            'title' => 'Edit Rapat',
            'name' => 'Andrian Wahyu',
            'tipe' => $tipe,
            'data' => $data,
            'room' => $room,
        ]);
    }

    public function updateRapat(Request $request, $id)
    {

        $data = Conference::find($id);
        $data->update($request->all());
        // dd($data);

        return redirect()->route('rapat');
    }

    public function deleteRapat($id)
    {

        $data = Conference::find($id);
        $data->delete();

        $notulen = Notulen::find($id);
        $notulen->delete();

        return redirect()->route('rapat');
    }

    public function rapatBerjalan()
    {
        $data = Conference::where('status', '=', 'Proses')->latest()->get();

        return view('notulen.rapatBerjalan', [
            'title' => 'Rapat Berjalan',
            'name' => 'Andrian Wahyu',
            'data' => $data,
        ]);
    }

    public function rapatSelesai()
    {
        $data = Conference::where('status', '=', 'Selesai')->latest()->get();

        return view('rapatSelesai', [
            'title' => 'Rapat Selesai',
            'name' => 'Andrian Wahyu',
            'data' => $data,
        ]);
    }

    public function doneRapat($id)
    {

        $data = Conference::find($id);
        // dd($data);
        $data->update([
            'status' => 'Selesai'
        ]);


        return redirect()->route('rapat');
    }
}
