<?php

namespace App\Http\Controllers;

use App\Models\Conference;
use App\Models\Notulen;
use App\Models\Participant;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class ParticipantController extends Controller
{
    //
    public function index($id)
    {
        $user =
            DB::table('participants')->where('conference_id', $id)->get();

        $data = Conference::find($id);

        $document = DB::table('dokumentations')->where('conference_id', $id)->get();

        return view('detail.detailPeserta', [
            'title' => 'Detail Peserta',
            'name' => 'Andrian Wahyu',
            'user' => $user,
            'data' => $data,
            'document' => $document,
        ]);
    }

    public function deletePeserta(Request $request, $id)
    {
        $conference = $request->id;
        $user = Participant::find($id);
        $user->delete();

        return redirect('/detail-peserta/' . $conference);
    }

    public function tambahPeserta(Request $request, $id)
    {
        $conference_id = $request->id;

        return view('detail.tambahPeserta', [
            'title' => 'Tambah Peserta',
            'name' => 'Andrian Wahyu',
            'conference_id' => $conference_id,
        ]);
    }

    public function addPeserta(Request $request)
    {

        $validateData = $request->validate([
            'nama' => 'required',
            'jabatan' => 'required',
        ]);

        Participant::create($request->all());

        return redirect('/detail-peserta/' . $request->conference_id);
    }

    public function detailRapat($id)
    {
        $user =
            DB::table('participants')->where('conference_id', $id)->get();

        $data = Conference::find($id);

        $document = DB::table('dokumentations')->where('conference_id', $id)->get();

        return view('detail.detailRapat', [
            'title' => 'Detail Rapat',
            'name' => 'Andrian Wahyu',
            'user' => $user,
            'data' => $data,
            'document' => $document,
        ]);
    }

    public function detailSelesai($id)
    {
        $user =
            DB::table('participants')->where('conference_id', $id)->get();

        $data = Conference::find($id);

        $document = DB::table('dokumentations')->where('conference_id', $id)->get();

        return view('detail.detailRapatSelesai', [
            'title' => 'Detail Rapat',
            'name' => 'Andrian Wahyu',
            'user' => $user,
            'data' => $data,
            'document' => $document,
        ]);
    }

    public function cetakHadir($id)
    {
        $data = Conference::find($id);
        $conference = $data->id;

        $peserta = Participant::where('conference_id', '=', $conference)->get();


        return view('cetakHadir', [
            'data' => $data,
            'peserta' => $peserta,
        ]);
    }

    public function cetakNotulen()
    {
        return view('cetakNotulen', []);
    }

    public function cetakNotulen2($id)
    {
        $data = Conference::find($id);
        $conference = $data->id;

        $peserta = Participant::where('conference_id', '=', $conference)->get();
        $notulen = Notulen::find($conference);



        return view('cetakNotulen', [
            'data' => $data,
            'peserta' => $peserta,
            'notulen' => $notulen,
        ]);
    }

    public function cetakHadir2($id)
    {
        $data = Conference::find($id);
        $conference = $data->id;

        $peserta = Participant::where('conference_id', '=', $conference)->get();


        return view('hadir', [
            'data' => $data,
            'peserta' => $peserta,
        ]);
    }
}
