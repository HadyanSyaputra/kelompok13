<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\ModelAkademik296;

class Akademik296Controller extends Controller
{
    public function create()
    {
        return view('akademik.create');
    }

    public function store(Request $request)
    {
        $validatedData = $request->validate([
            'prodi' => 'required|string|max:255',
            'angkatan' => 'required|string|max:255',
            'semester' => 'required|string|max:255',
            'jumlah_mk' => 'required|string|max:255',
            'ipk' => 'required|string|max:255',
            'kelas' => 'required|string|max:255',
            'dospem' => 'required|string|max:255',
        ]);

        ModelAkademik296::create($validatedData);

        return redirect()->back()->with('success', 'Data berhasil disimpan!');
    }

    public function index()
    {
        $dataAkademik = ModelAkademik296::all();
        return view('akademik.index', compact('dataAkademik'));
    }

    public function destroy($id)
    {
        $akademik = ModelAkademik296::findOrFail($id);
        $akademik->delete();

        return redirect()->route('akademik.index')->with('success', 'Data berhasil dihapus!');
    }
}
