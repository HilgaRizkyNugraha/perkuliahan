<!-- resources/views/dosen/create.blade.php -->

@extends('layouts.app') <!-- Pastikan menggunakan layout yang sudah Anda atur -->

@section('content')
    <h1>Tambah Dosen Baru</h1>

    @if($errors->any())
        <div class="alert alert-danger">
            <ul>
                @foreach($errors->all() as $error)
                    <li>{{ $error }}</li>
                @endforeach
            </ul>
        </div>
    @endif

    <form action="{{ route('dosen.store') }}" method="POST">
        @csrf
        <div class="form-group">
            <label for="nama">Nama:</label>
            <input type="text" class="form-control" id="nama" name="nama">
        </div>
        <div class="form-group">
            <label for="nip">NIP:</label>
            <input type="text" class="form-control" id="nip" name="nip">
        </div>
        <div class="form-group">
            <label for="prodi_id">Prodi ID:</label>
            <input type="text" class="form-control" id="prodi_id" name="prodi_id">
        </div>
        <button type="submit" class="btn btn-primary">Simpan</button>
    </form>
@endsection
