@extends('template.layout')
@section('title', 'Perbarui Reviewer')

@section('content')
<!-- Update Content -->
<div class="col py-3">
    <div class="row mt-3 mb-3">
        <div class="col-lg-12 margin-tb">
            <div class="col-lg-12 margin-tb mb-4 text-center">
                <h2>Form Perbarui Reviewer</h2>
            </div>
            <form action="{{ route('reviewer-simpan-perbaruan', ['id' => $reviewer->id]) }}" method="POST">
                @csrf
                @method('PUT')
                <div class="mb-3">
                    <label for="namaReviewer" class="form-label">Nama Beserta Gelar</label>
                    <input type="text" class="form-control" id="namaReviewer" name="namaReviewer" placeholder="{{ $reviewer->nama }}">
                </div>
                <div class="mb-3">
                    <label for="tambahTanggalAwalLuang" class="form-label">Input Tanggal Awal Luang</label>
                    <input type='date' class='form-control' id="tambahAwalLuang" name="tambahAwalLuang">
                </div>
                <div class="mb-3">
                    <label for="tambahTanggalAkhirLuang" class="form-label">Input Tanggal Akhir Luang</label>
                    <input type='date' class='form-control' id="tambahAkhirLuang" name="tambahAkhirLuang">
                </div>
                <div class="mb-3">
                    <label for="tambahAwalWaktu" class="form-label">Awal Waktu</label>
                    <input type='time' class='form-control' id="tambahAwalWaktu" name="tambahAwalWaktu">
                </div>
                <div class="mb-3">
                    <label for="tambahAkhirWaktu" class="form-label">Akhir Waktu</label>
                    <input type='time' class='form-control' id="tambahAkhirWaktu" name="tambahAkhirWaktu">
                </div>
                <div class="mt-5">
                    <button type="submit" class="btn btn-primary col-sm-12">Ubah</button>
                </div>
            </form>
            <div class="mt-3">
                <a href="{{ route('reviewer.index') }}" class="btn btn-danger col-sm-12">
                    Batal
                </a>
            </div>
        </div>
    </div>
</div>
<!-- Update Content End -->
@endsection
