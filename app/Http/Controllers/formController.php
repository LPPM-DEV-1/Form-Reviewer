<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\form;


class formController extends Controller
{
    // FUNGSI FUNGSI PENGATURAN FORM START

    public function index()
    {
        // Ambil semua data form
        $form = form::all();
        return view('form.index', compact('form'));
    }

    public function create()
    {
        // Tampilkan form untuk menambahkan judul dan rentang waktu
        return view('form.create');
    }

    public function store(Request $request)
    {

        // Tambahkan data reviewer baru dari data form
        $form = new form;
        $form->judul = $request->input('judulForm');
        $form->rentangWaktu = $request->input('rentangWaktu');
        $form->status = "Non-Aktif";

        // Simpan perbaruan
        $form->save();

        return redirect()->route('form.index')->with('success', 'Berhasil menambahkan form!');

    }

    public function edit($id)
    {
        // Ambil data peneliti berdasarkan ID
        $form = form::findOrFail($id);
    
        // Render tampilan 'peneliti.edit' dengan data peneliti dan reviewer
        return view('form.update', compact('form'));
    }

    public function update(Request $request, $id)
    {
        //Edit form sesuai id
        $form = form::findOrFail($id);
        $form->judul = $request->input('judulForm');
        $form->rentangWaktu = $request->input('rentangWaktu');

        //Save form
        $form->save();

        return redirect()->route('form.index')->with('success', 'Berhasil memperbarui form!');

    }

    public function activate(Request $request, $id)
    {
        // Cari form yang harus diaktifkan berdasarkan id
        $form = Form::findOrFail($id);
        
        // Non aktifkan semua form kecuali form dengan id yang sesuai
        Form::where('id', '!=', $id)->update(['status' => 'Non-Aktif']);
    
        // Aktivasi form dengan id yang sesuai
        $form->status = 'Aktif';;
        $form->save();
    
        // Notifikasi bahwa aktivasi sukses
        return redirect()->back()->with('success', 'Form berhasil diaktifkan.');

    }

    public function deactivate(Request $request, $id)
    {
        // Cari form yang harus di-nonaktifkan berdasarkan id
        $form = Form::findOrFail($id);

        // Non aktifkan form dengan id yang sesuai
        $form->status = 'Non-Aktif';;
        $form->save();

        // Notifikasi bahwa form di-nonaktifkan
        return redirect()->back()->with('success', 'Form berhasil dinonaktifkan');

    }

    public function destroy($id)
    {
        // Cari form 
        $form = Form::findOrFail($id);

        if ($form) {
            $form->deleteWithRiwayat();
        }

        return redirect()->route('form.index')->with('success', 'Form sukses dihapus');

    }
    // FUNGSI FUNGSI PENGATURAN FORM END


    // FUNGSI FUNGSI PENGISIAN FORM START
    public function search_active()
    {

        // Ambil semua data form 
        $forms = Form::all();

        // Cek apakah ada form berstatus 'Aktif'
        $activeForms = $forms->filter(function ($form) {
            return $form->status === 'Aktif';
        });

        // Jika ada form yang aktif kembalikan 'active' view
        if ($activeForms->isNotEmpty()) {
            return view('form.tampilan-pengisi.active', compact('activeForms'));
        } else {
            // Jika tidak ada form yang aktif kembalikan 'noActive' view
            return view('form.tampilan-pengisi.noActive');
        }

    }



    // FUNGSI FUNGSI PENGISIAN FORM END
    

}
