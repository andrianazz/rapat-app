<?php

namespace App\Http\Controllers;

use App\Models\People;
use Illuminate\Http\Request;

class PeopleController extends Controller
{
    //
    public function index()
    {
        $data = People::all();

        return view('peserta', [
            'title' => 'Peserta',
            'name' => 'Andrian Wahyu',
            'data' => $data,
        ]);
    }

    public function delPeople($id)
    {
        $data = People::find($id);
        $data->delete();

        return redirect()->route('people');
    }

    public function addPeople(Request $request)
    {
        $validateData = $request->validate([
            'nama' => 'required',
            'divisi' => 'required',
        ]);
        People::create($request->all());

        return redirect()->route('people');
    }
}
