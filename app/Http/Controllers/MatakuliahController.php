<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Matakuliah;

class MatakuliahController extends Controller
{
    //Menampilkan seluruh data mata kuliah
    public function index()
    {
        $matakuliah = Matakuliah::latest()->paginate(10);

        return view('matakuliah.index', compact('matakuliah'));
    }

    // Menampilkan form tambah data
    public function create()
    {
        return view('matakuliah.create');
    }

    // Menyimpan data ke database
    public function store(Request $request)
    {
        $request->validate([
            'kode_matakuliah' => 'required|string|max:20|unique:matakuliah,kode_matakuliah',
            'nama_matakuliah' => 'required|string|max:100',
            'sks' => 'required|integer|min:1|max:6',
        ], [
            'kode_matakuliah.required' => 'Kode mata kuliah wajib diisi.',
            'kode_matakuliah.unique' => 'Kode mata kuliah sudah digunakan.',
            'nama_matakuliah.required' => 'Nama mata kuliah wajib diisi.',
            'sks.required' => 'Jumlah SKS wajib diisi.',
            'sks.integer' => 'SKS harus berupa angka.',
            'sks.min' => 'Jumlah SKS minimal 1.',
            'sks.max' => 'Jumlah SKS maksimal 6.',
        ]);

        Matakuliah::create($request->only([
            'kode_matakuliah',
            'nama_matakuliah',
            'sks'
        ]));

        return redirect()->route('matakuliah.index')
            ->with('success', 'Data mata kuliah berhasil disimpan.');
    }

    // Menampilkan detail berdasarkan ID
    public function show($id)
    {
        $matakuliah = Matakuliah::findOrFail($id);

        return view('matakuliah.show', compact('matakuliah'));
    }
}
