@extends('template.layout')
@section('title', 'Tambah Form')

@section('content')
<!-- Create Content -->
<div class="col py-3">
    <div class="row mt-3 mb-3">
        <div class="col-lg-12 margin-tb">
            <div class="col-lg-12 margin-tb mb-4 text-center">
                <h2>Form Perbaruan Form</h2>
            </div>
            @if(session('error'))
            <div class="alert alert-error">
                {{ session('error') }}
            </div>
            @endif
            <form action="{{ route('form-simpan-perbaruan', ['id' => $form->id]) }}" method="POST">
                @csrf
                @method('PUT')
                <div class="mb-3">
                    <label for="tambahJudulForm" class="form-label">Ubah Judul Form</label>
                    <input type="text" class="form-control" id="tambahJudulForm" name="judulForm" placeholder="{{ $form->judul }}">
                </div>
                <div class="mb-3">
                    <label for="pilihWaktu" class="form-label">Setting Rentang Waktu</label>
                    <select class="form-select" aria-label="Pilih Rentang Waktu" id="pilihWaktu" name="rentangWaktu">
                        <option selected>Silahkan Pilih Rentang Waktu</option>
                        <option value="15">15 menit</option>
                        <option value="30">30 menit</option>
                        <option value="45">45 menit</option>
                        <option value="60">60 menit</option>
                    </select>
                </div>
                <div class="mt-5">
                    <button type="submit" class="btn btn-primary col-sm-12">Submit</button>
                </div>
            </form>
            <div class="mt-3">
                <a href="{{ route('form.index') }}" class="btn btn-danger col-sm-12">
                    Batal
                </a>
            </div>
        </div>
    </div>
</div>
<!-- Create Content End -->
@endsection