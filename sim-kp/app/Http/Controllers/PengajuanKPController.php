<?php

namespace App\Http\Controllers;

use App\Models\PengajuanKP;
use Illuminate\Http\Request;
use App\Services\CoreService;

class PengajuanKPController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index(CoreService $core)
    {
        $pengajuans = PengajuanKP::all();

        // Ambil data mahasiswa via CoreService
        $mahasiswas = $core->getMahasiswas();

        $pengajuans = $pengajuans->map(function ($item) use ($mahasiswas) {
            $mahasiswa = collect($mahasiswas)->firstWhere('id', $item->mahasiswa_id);
            $item->mahasiswa = $mahasiswa;
            return $item;
        });

        return view('pengajuan-kp.index', compact('pengajuans'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create(CoreService $core)
    {
        $mahasiswas = $core->getMahasiswas();

        return view('pengajuan-kp.create', compact('mahasiswas'));
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $request->validate([
            'mahasiswa_id' => 'required',
            'judul' => 'required|string|max:255',
        ]);

        PengajuanKP::create($request->only('mahasiswa_id', 'judul', 'instansi'));

        return redirect()->route('pengajuan-kp.index')->with('success', 'Pengajuan KP berhasil ditambahkan');
    }

    /**
     * Display the specified resource.
     */
    public function show($id, CoreService $core)
    {
        $pengajuan = PengajuanKP::findOrFail($id);

        $mahasiswas = $core->getMahasiswas();
        $mahasiswa = collect($mahasiswas)->firstWhere('id', $pengajuan->mahasiswa_id);

        return view('pengajuan-kp.show', compact('pengajuan', 'mahasiswa'));
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        //
    }
}
