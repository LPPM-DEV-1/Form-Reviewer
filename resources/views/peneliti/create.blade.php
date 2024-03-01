@extends('template.layout')
@section('title', 'Tambah Peneliti')

@section('content')
<!-- Create Content -->
<div class="col py-3">
    <div class="row mt-3 mb-3">
        <div class="col-lg-12 margin-tb">
            <div class="col-lg-12 margin-tb mb-4 text-center">
                <h2>Form Tambah Peneliti</h2>
            </div>
            @if(session('error'))
            <div class="alert alert-error">
                {{ session('error') }}
            </div>
            @endif
            <form action="{{ route('peneliti-simpan') }}" method="POST">
                @csrf
                <div class="mb-3">
                    <label for="tambahNamaPeneliti" class="form-label">Nama Beserta Gelar</label>
                    <input type="text" class="form-control" id="tambahNamaPeneliti" name="namaPeneliti">
                </div>
                <div class="mb-3">
                    <label for="pilihReviewer" class="form-label">Pilih Reviewer</label>
                    <select class="form-select" aria-label="Pilih Reviewer" id="pilihReviewer" name="reviewer_id">
                        <option selected>Silahkan Pilih Reviewer</option>
                        @foreach ($reviewer as $reviewer)
                            <option value="{{ $reviewer->id }}">{{ $reviewer->nama }}</option>
                        @endforeach
                    </select>
                </div>
                <div class="mt-5">
                    <button type="submit" class="btn btn-primary col-sm-12">Submit</button>
                </div>
            </form>
            <div class="mt-3">
                <a href="{{ route('peneliti.index') }}" class="btn btn-danger col-sm-12">
                    Batal
                </a>
            </div>
        </div>
    </div>
</div>
<!-- Create Content End -->
@endsection