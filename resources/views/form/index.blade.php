@extends('template.layout')
@section('title', 'Daftar Form')

@section('content')
<!-- Index Content -->
<div class="col py-3">
    <div class="row mt-3 mb-3">
        <div class="col-lg-12 margin-tb">
            <div class="float-start">
                <h2>Tabel Daftar Form</h2>
            </div>
            <div class="float-end">
                <a class="btn btn-success tombol-tambah" href="{{ route('form-tambah') }}">Tambah Form</a>
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
            <th>Judul Form</th>
            <th>Status</th>
            <th>Rentang Waktu</th>
            <th width="280px">Aksi</th>
        </tr>
        @foreach($form as $key => $form)
        <tr>
            <td class='text-center'>{{ $key + 1 }}</td>
            <td class='text-center'>{{ $form->judul}}</td>
            <td class='text-center'>{{ $form->status}}</td>
            <td class='text-center'>{{ $form->rentangWaktu }} Menit</td>
            <td class='text-center' width="280px">
                <a href="{{ route('form-perbarui', $form->id) }}" class="btn btn-primary">Edit</a>
                <form action="{{ route('form-aktifkan', $form->id) }}" method="POST" style="display: inline;">
                    @csrf
                    @method('PUT')
                    <button type="submit" class="btn btn-success" onclick="return confirm('Yakin ingin mengaktifkan? Form yang sedang aktif akan dinonaktifkan')">Activate</button>                
                </form>     
                <form action="{{ route('form-nonaktifkan', $form->id) }}" method="POST" style="display: inline;">
                    @csrf
                    @method('PUT')
                    <button type="submit" class="btn btn-warning" onclick="return confirm('Yakin ingin menonaktifkan? Form nonaktif tidak dapat menerima jawaban')">Deactivate</button>                
                </form>           
                <form action="{{ route('form-hapus', $form->id) }}" method="POST" style="display: inline;">
                    @csrf
                    @method('DELETE')
                    <button type="submit" class="btn btn-danger" onclick="return confirm('Yakin ingin menghapus? Semua history tentang form ini akan terhapus juga')">Delete</button>
                </form>            
            </td>
        </tr>
        @endforeach
    </table>
</div>
<!-- Index Content End -->
@endsection
