<?php

namespace App\Http\Controllers;

use App\Models\MeetingType;
use Illuminate\Http\Request;

class MeetingTypeController extends Controller
{
    //

    public function index()
    {
        $data = MeetingType::all();

        return view('jenisRapat', [
            'data' => $data,
            'title' => "Jenis Rapat",
            'name' => 'Andrian Wahyu'
        ]);
    }

    public function addjenisrapat(Request $request)
    {

        $validateData = $request->validate([
            'jenis' => 'required'
        ]);


        MeetingType::create($request->all());

        return redirect()->route('jenisRapat');
    }

    public function delJenisRapat($id)
    {
        $data = MeetingType::find($id);
        $data->delete();

        return redirect()->route('jenisRapat');
    }
}
