<!-- resources/views/mahasiswa/create.blade.php -->

@extends('layouts.app') <!-- Pastikan menggunakan layout yang sudah Anda atur -->

@section('content')
    <h1>Tambah Mahasiswa Baru</h1>

    @if($errors->any())
        <div class="alert alert-danger">
            <ul>
                @foreach($errors->all() as $error)
                    <li>{{ $error }}</li>
                @endforeach
            </ul>
        </div>
    @endif

    <form action="{{ route('mahasiswa.store') }}" method="POST">
        @csrf
        <div class="form-group">
            <label for="nama">Nama:</label>
            <input type="text" class="form-control" id="nama" name="nama">
        </div>
        <div class="form-group">
            <label for="nim">NIM:</label>
            <input type="text" class="form-control" id="nim" name="nim">
        </div>
        <div class="form-group">
            <label for="prodi_id">Prodi ID:</label>
            <input type="text" class="form-control" id="prodi_id" name="prodi_id">
        </div>
        <button type="submit" class="btn btn-primary">Simpan</button>
    </form>
@endsection
