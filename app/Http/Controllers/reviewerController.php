<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\reviewer;
use Illuminate\Database\QueryException;

class reviewerController extends Controller
{
    public function index()
    {
        // Ambil semua data reviewer
        $reviewer = reviewer::all();
        return view('reviewer.index', compact('reviewer'));
    }

    public function create()
    {
        // Tampilkan form untuk menambahkan reviewer
        return view('reviewer.create');
    }

    public function store(Request $request)
    {

        // Validate the input
        $request->validate([
            'namaReviewer' => 'required|string',
            'tambahAwalLuang' => 'required|date',
            'tambahAkhirLuang' => 'required|date|after_or_equal:tambahAwalLuang',
            'tambahAwalWaktu' => 'required|date_format:H:i',
            'tambahAkhirWaktu' => 'required|date_format:H:i|after_or_equal:tambahAwalWaktu',
        ]);

        // Tambahkan data reviewer baru dari data form
        $reviewer = new Reviewer;
        $reviewer->nama = $request->input('namaReviewer');
        $reviewer->tanggalAwalLuang = $request->input('tambahAwalLuang');
        $reviewer->tanggalAkhirLuang = $request->input('tambahAkhirLuang');
        $reviewer->waktuAwal = $request->input('tambahAwalWaktu');
        $reviewer->waktuAkhir = $request->input('tambahAkhirWaktu');

        // Simpan perbaruan
        $reviewer->save();

        return redirect()->route('reviewer.index')->with('success', 'Berhasil menambahkan reviewer!');

    }

    public function edit($id)
    {
        // Tampilkan form untuk mengedit
        $reviewer = Reviewer::findOrFail($id);

        return view('reviewer.update', compact('reviewer'));
    }

    public function update(Request $request, $id)
    {
        // Perbarui reviewer
        $reviewer = Reviewer::findOrFail($id);
        $reviewer->nama = $request->input('namaReviewer');
        $reviewer->tanggalAwalLuang = $request->input('tambahAwalLuang'); // Input awal luang
        $reviewer->tanggalAkhirLuang = $request->input('tambahAkhirLuang'); // Input akhir luang
        $reviewer->waktuAwal = $request->input('tambahAwalWaktu');       // Input waktu awal
        $reviewer->waktuAkhir = $request->input('tambahAkhirWaktu'); //Input waktu akhir

        // Simpan perbaruan
        $reviewer->save();

        return redirect()->route('reviewer.index')->with('success', 'Berhasil mengubah data reviewer!');
    }

    public function destroy($id)
    {
        // Menghapus reviewer dari database
        $reviewer = Reviewer::findOrFail($id);
        
        if ($reviewer) {
            $reviewer->deleteWithPeneliti();
        }

        return redirect()->route('reviewer.index')->with('success', 'Berhasil menghapus reviewer!');
    }
}
