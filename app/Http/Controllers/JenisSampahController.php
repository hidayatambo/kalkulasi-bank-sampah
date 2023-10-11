<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\JenisSampah;

class JenisSampahController extends Controller
{
    public function index()
    {
        $jenisSampahList = JenisSampah::all();
        return view('jenis_sampah.index', ['jenisSampahList' => $jenisSampahList]);
    }

    public function create()
    {
        return view('jenis_sampah.create');
    }

    public function store(Request $request)
    {
        $request->validate([
            'nama' => 'required',
            'harga_per_kilogram' => 'required|numeric|min:0',
        ]);

        JenisSampah::create($request->all());

        return redirect()->route('jenis-sampah.index')->with('success', 'Jenis Sampah berhasil ditambahkan.');
    }

    public function edit($id)
    {
        $jenisSampah = JenisSampah::findOrFail($id);
        return view('jenis_sampah.edit', ['jenisSampah' => $jenisSampah]);
    }

    public function update(Request $request, $id)
    {
        $request->validate([
            'nama' => 'required',
            'harga_per_kilogram' => 'required|numeric|min:0',
        ]);

        $jenisSampah = JenisSampah::findOrFail($id);
        $jenisSampah->update($request->all());

        return redirect()->route('jenis-sampah.index')->with('success', 'Jenis Sampah berhasil diperbarui.');
    }

    public function destroy($id)
    {
        $jenisSampah = JenisSampah::findOrFail($id);
        $jenisSampah->delete();

        return redirect()->route('jenis-sampah.index')->with('success', 'Jenis Sampah berhasil dihapus.');
    }
}
