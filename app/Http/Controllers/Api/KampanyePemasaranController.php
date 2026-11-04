<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use App\Models\KampanyePemasaran;
use Illuminate\Http\Request;

class KampanyePemasaranController extends Controller
{
    // GET: mengambil seluruh data kampanye
    public function index()
    {
        $kampanye = KampanyePemasaran::latest()->get();

        return response()->json([
            'message' => 'Data kampanye berhasil diambil.',
            'data' => $kampanye,
        ]);
    }

    // POST: menyimpan kampanye baru
    public function store(Request $request)
    {
        $validated = $request->validate([
            'nama_kampanye' => ['required', 'string', 'max:255'],
            'jenis_kampanye' => ['required', 'string', 'max:255'],
            'target_audiens' => ['nullable', 'string'],
            'anggaran' => ['required', 'numeric', 'min:0'],
            'tanggal_mulai' => ['required', 'date'],
            'tanggal_selesai' => [
                'required',
                'date',
                'after_or_equal:tanggal_mulai',
            ],
            'status' => [
                'required',
                'in:direncanakan,berjalan,selesai,dibatalkan',
            ],
            'deskripsi' => ['nullable', 'string'],
        ]);

        $kampanye = KampanyePemasaran::create($validated);

        return response()->json([
            'message' => 'Kampanye berhasil ditambahkan.',
            'data' => $kampanye,
        ], 201);
    }
}