<?php

namespace App\Http\Controllers;

use App\Models\Mahasiswa;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Http;

class MahasiswaController extends Controller
{
    public function index()
    {
        $mahasiswa = Mahasiswa::all();
        return response()->json($mahasiswa);

    }

    public function show($id)
    {
        $mahasiswa = Mahasiswa::find($id);
        if ($mahasiswa) {
            return response()->json($mahasiswa);
        }
        return response()->json(['message' => 'Data tidak ditemukan'], 404);
    }

    public function store(Request $request)
    {
        $validated = $request->validate([
            'nama' => 'required|string',
            'nim' => 'required|string|unique:mahasiswas',
            'jurusan' => 'required|string',
        ]);

        $mahasiswa = Mahasiswa::create($validated);
        return response()->json([
            'message' => 'Data mahasiswa berhasil ditambahkan',
            'data' => $mahasiswa], 201);
    }

    public function update(Request $request, $id)
    {
        $mahasiswa = Mahasiswa::find($id);
        if ($mahasiswa) {
            $validated = $request->validate([
                'nama' => 'required|string',
                'nim' => 'required|string|unique:mahasiswas,nim,' . $id,
                'jurusan' => 'required|string',
            ]);

            $mahasiswa->update($validated);
            return response()->json($mahasiswa);
        }
        return response()->json(['message' => 'Data tidak ditemukan'], 404);
    }

    public function destroy($id)
    {
        $mahasiswa = Mahasiswa::find($id);
        if ($mahasiswa) {
            $mahasiswa->delete();
            return response()->json(['message' => 'Data berhasil dihapus']);
        }
        return response()->json(['message' => 'Data tidak ditemukan'], 404);
    }
}
