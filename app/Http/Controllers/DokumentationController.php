<?php

namespace App\Http\Controllers;

use App\Models\Conference;
use Illuminate\Http\Request;
use App\Models\Dokumentation;
use Illuminate\Support\Facades\File as FacadesFile;

class DokumentationController extends Controller
{
    //
    public function addFoto(Request $request)
    {

        $data = new Dokumentation();
        $kode = $request->kode;
        $conference_id = $request->conference_id;

        if ($request->hasFile('foto')) {
            $nameImage = $request->file('foto')->move('dokumentasi/' . $kode . "/", $request->file('foto')->getClientOriginalName());

            $data->foto = $request->file('foto')->getClientOriginalName();
            $data->conference_id = $request->conference_id;
            $data->save();
        }


        return redirect('/detail-peserta/' . $conference_id);
    }

    public function deleteFoto(Request $request, $id)
    {
        $conference_id = $request->conference_id;
        $kode = $request->kode;
        $data = Dokumentation::find($id);
        $image_path = "dokumentasi/" . $kode . "/" . $data->foto;
        if (FacadesFile::exists($image_path)) {
            FacadesFile::delete($image_path);
        }
        $data->delete();
        return redirect('/detail-peserta/' . $conference_id);
    }

    public function cetakDokumen($id)
    {
        $data = Conference::find($id);
        $conference = $data->id;

        $dokumen = Dokumentation::where('conference_id', '=', $conference)->get();
        return view('cetakDokumen', [
            'data' => $data,
            'document' => $dokumen,
        ]);
    }
}
