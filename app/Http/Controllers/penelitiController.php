<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\peneliti;
use App\Models\reviewer;

class penelitiController extends Controller
{
    public function index()
    {
        // Ambil semua peneliti dengan reviewer terkait
        $peneliti = peneliti::with('punya_reviewer')->get();

        // Render peneliti.index view bersamaan dengan data yang diambil
        return view('peneliti.index', compact('peneliti'));
    }

    public function create()
    {
        // Ambil data reviewer untuk mengisi dropdown pada form
        $reviewer = reviewer::all();

        // Render 'peneliti-tambah' view bersamaan data reviewer
        return view('peneliti.create', compact('reviewer'));
    }

    public function store(Request $request)
    {
        // Validasi data yang masuk
        $request->validate([
            'namaPeneliti' => 'required|string',
            'reviewer_id' => 'nullable|exists:reviewer,id', // Validasi bahwa reviewer_id ada di table reviewer
        ]);

        // Buat data peneliti baru dengan data yang sudah divalidasi
        $peneliti = new peneliti;
        $peneliti->nama = $request->input('namaPeneliti');
        $peneliti->reviewer_id = $request->input('reviewer_id');

        $peneliti->save();

        // Tampilkan 'peneliti.index' dengan pesan sukses 
        return redirect()->route('peneliti.index')->with('success', 'Peneliti sukses ditambahkan!');
    }

    public function edit($id)
    {
        // Ambil semua data reviewer untuk mengisi dropdown pada form edit
        $reviewers = Reviewer::all();
    
        // Ambil data peneliti berdasarkan ID
        $peneliti = Peneliti::findOrFail($id);
    
        // Render tampilan 'peneliti.edit' dengan data peneliti dan reviewer
        return view('peneliti.update', compact('peneliti', 'reviewers'));
    }

    public function update(Request $request, Peneliti $peneliti, $id)
    {


        // Validasi data yang masuk
        $request->validate([
            'namaPeneliti' => 'required|string',
            'reviewer_id' => 'nullable|exists:reviewer,id',
        ]);

        $peneliti = peneliti::findOrFail($id);

        // Perbarui data peneliti dengan data yang sudah tervalidasi
        $peneliti->update([
            'nama' => $request->input('namaPeneliti'),
            'reviewer_id' => $request->input('reviewer_id'),
        ]);
        
        // Pengarahan ke halaman 'peneliti.index' dengan pesan sukses
        return redirect()->route('peneliti.index')->with('success', 'Peneliti sukses diperbarui');
    }

    public function destroy($id)
    {
        // Hapus data peneliti yang dipilih
        $peneliti = peneliti::findOrFail($id);
        $peneliti->delete();

        // Pengarahan ke halaman index dengan pesan sukses
        return redirect()->route('peneliti.index')->with('success', 'Peneliti sukses dihapus');
    }
}
