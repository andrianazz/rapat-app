<?php

namespace App\Http\Controllers;

use App\Models\Room;
use Illuminate\Http\Request;

class RoomController extends Controller
{
    //
    public function index()
    {
        $data = Room::all();

        return view('ruangan', [
            'title' => 'Ruangan',
            'name' => 'Andrian Wahyu',
            'data' => $data,
        ]);
    }

    public function delRuangan($id)
    {
        $data = Room::find($id);
        $data->delete();

        return redirect()->route('room');
    }

    public function addRuangan(Request $request)
    {
        $validateData = $request->validate([
            'nama' => 'required',
            'deskripsi' => 'required',
        ]);
        Room::create($request->all());

        return redirect()->route('room');
    }
}
