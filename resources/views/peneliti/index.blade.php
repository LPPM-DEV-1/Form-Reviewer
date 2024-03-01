@extends('template.layout')
@section('title', 'Daftar Peneliti')

@section('content')
<!-- Index Content -->
<div class="col py-3">
    <div class="row mt-3 mb-3">
        <div class="col-lg-12 margin-tb">
            <div class="float-start">
                <h2>Tabel Daftar Peneliti</h2>
            </div>
            <div class="float-end">
                <a class="btn btn-success tombol-tambah" href="{{ route('peneliti-tambah') }}">Tambah Peneliti</a>
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
            <th>Nama Peneliti</th>
            <th>Nama Reviewer</th>
            <th width="280px">Aksi</th>
        </tr>
        @foreach($peneliti as $key => $peneliti)
        <tr>
            <td class='text-center'>{{ $key + 1 }}</td>
            <td class='text-center'>{{ $peneliti->nama}}</td>
            <td class='text-center'>{{ $peneliti->punya_reviewer->nama }}</td>
            <td class='text-center' width="280px">
                <a href="{{ route('peneliti-perbarui', $peneliti->id) }}" class="btn btn-primary">Edit</a>
                <form action="{{ route('peneliti-hapus', $peneliti->id) }}" method="POST" style="display: inline;">
                    @csrf
                    @method('DELETE')
                    <button type="submit" class="btn btn-danger" onclick="return confirm('Yakin ingin menghapus?')">Delete</button>
                </form>            
            </td>
        </tr>
        @endforeach
    </table>
</div>
<!-- Index Content End -->
@endsection