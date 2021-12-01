<?php

namespace App\Http\Controllers;

use App\Models\Conference;
use App\Models\Notulen;
use Illuminate\Http\Request;

class NotulenController extends Controller
{
    //
    public function index($id)
    {
        $rapat = Notulen::where('conference_id', '=', $id)->get()->first();


        return view('notulen.notulen', [
            'title' => 'Notulen',
            'name' => 'Andrian Wahyu',
            'rapat' => $rapat,
        ]);
    }

    public function updateNotulen(Request $request)
    {
        $validateData = $request->validate([
            'penulis' => 'required',
            'pimpinan' => 'required',
            'peserta' => 'required',
            'hasil' => 'required',
        ]);
        $id = $request->conference_id;

        $data = Notulen::find($id);


        if ($data->count > 1) {
            $data = new Notulen();
        }

        $data->update($request->all());

        return redirect()->route('rapatBerjalan');
    }

    public function editNotulenSelesai($id)
    {
        $rapat = Notulen::where('conference_id', '=', $id)->get()->first();


        return view('notulen.notulenSelesai', [
            'title' => 'Notulen',
            'name' => 'Andrian Wahyu',
            'rapat' => $rapat,
        ]);
    }
}
