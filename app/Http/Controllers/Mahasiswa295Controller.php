<?php
namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\ModelMahasiswa295;

class Mahasiswa295Controller extends Controller
{
    public function create()
    {
        return view('mahasiswa.create');
    }

    public function store(Request $request)
    {
        $validatedData = $request->validate([
            'nama' => 'required|string|max:255',
            'nim' => 'required|string|max:255',
            'email' => 'required|string|max:255',
            'gender' => 'required|string|max:255',
            'alamat' => 'required|string|max:255',
        ]);

        ModelMahasiswa295::create($validatedData);

        return redirect()->back()->with('success', 'Data berhasil disimpan!');
    }

    public function index()
    {
        $dataMahasiswa = ModelMahasiswa295::all();
        return view('mahasiswa.index', compact('dataMahasiswa'));
    }

    public function destroy($id)
    {
        $akademik = ModelMahasiswa295::findOrFail($id);
        $akademik->delete();

        return redirect()->route('mahasiswa.index')->with('success', 'Data berhasil dihapus!');
    }
}


