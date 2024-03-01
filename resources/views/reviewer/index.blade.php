@extends('template.layout')
@section('title', 'Daftar Reviewer')

@section('content')
<!-- Index Content -->
<div class="col py-3">
    <div class="row mt-3 mb-3">
        <div class="col-lg-12 margin-tb">
            <div class="float-start">
                <h2>Tabel Daftar Reviewer</h2>
            </div>
            <div class="float-end">
                <a class="btn btn-success tombol-tambah" href="{{ route('reviewer-tambah') }}">Tambah Reviewer</a>
            </div>
        </div>
    </div>
    @if(session('success'))
    <div class="alert alert-success">
        {{ session('success') }}
    </div>
    @endif
    <table class="table table-bordered">
        <tr>
            <th>No</th>
            <th>Nama Reviewer</th>
            <th>Tanggal Luang</th>
            <th>Waktu Luang</th>
            <th width="280px">Aksi</th>
        </tr>
        @foreach($reviewer as $key => $reviewer)
        <tr>
            <td class='text-center'>{{ $key + 1 }}</td>
            <td class='text-center'>{{ $reviewer->nama}}</td>
            <td class='text-center'>{{ date('d-m-Y', strtotime($reviewer->tanggalAwalLuang)) }} - {{ date('d-m-Y', strtotime($reviewer->tanggalAkhirLuang)) }}</td>
            <td class='text-center'>{{ date('H:i', strtotime($reviewer->waktuAwal)) }} - {{ date('H:i', strtotime($reviewer->waktuAkhir)) }}</td>
            <td class='text-center' width="280px">
                <a href="{{ route('reviewer-perbarui', $reviewer->id) }}" class="btn btn-primary">Edit</a>
                <form action="{{ route('reviewer-hapus', $reviewer->id) }}" method="POST" style="display: inline;">
                    @csrf
                    @method('DELETE')
                    <button type="submit" class="btn btn-danger" onclick="return confirm('Yakin ingin menghapus? Peneliti terkait akan ikut terhapus')">Delete</button>
                </form>            
            </td>
        </tr>
        @endforeach
    </table>
</div>
<!-- Index Content End -->
@endsection