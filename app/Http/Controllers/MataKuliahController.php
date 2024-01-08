<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\MataKuliah;

class MataKuliahController extends Controller
{
    public function index()
    {
        $mataKuliahs = MataKuliah::all();
        return view('mata_kuliah.index', compact('mataKuliahs'));
    }

    public function create()
    {
        return view('mata_kuliah.create');
    }

    public function store(Request $request)
    {
        $validatedData = $request->validate([
            'nama_matakuliah' => 'required|unique:mata_kuliahs,nama_matakuliah',
            //Tambahkan validasi sesuai kebutuhan
        ]);

        MataKuliah::create($validatedData);

        return redirect()->route('matakuliah.index')->with('success', 'Mata kuliah berhasil ditambahkan!');
    }

    public function show($id)
    {
        $matakuliah = MataKuliah::findOrFail($id);
        return view('mata_kuliah.show', compact('matakuliah'));
    }

    public function edit($id)
    {
        $matakuliah = MataKuliah::findOrFail($id);
        return view('mata_kuliah.edit', compact('matakuliah'));
    }

    public function update(Request $request, $id)
    {
        $matakuliah = MataKuliah::findOrFail($id);

        $validatedData = $request->validate([
            'nama_matakuliah' => 'required|unique:mata_kuliahs,nama_matakuliah,' . $id,
            //Tambahkan validasi sesuai kebutuhan
        ]);

        $matakuliah->update($validatedData);

        return redirect()->route('matakuliah.index')->with('success', 'Data mata kuliah berhasil diperbarui!');
    }

    public function destroy($id)
    {
        $matakuliah = MataKuliah::findOrFail($id);
        $matakuliah->delete();

        return redirect()->route('matakuliah.index')->with('success', 'Mata kuliah berhasil dihapus!');
    }
}
