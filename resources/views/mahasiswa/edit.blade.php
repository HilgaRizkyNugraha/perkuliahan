<!-- resources/views/mahasiswa/edit.blade.php -->

@extends('layouts.app')

@section('content')
    <h1>Edit Data Mahasiswa</h1>

    @if($errors->any())
        <div class="alert alert-danger">
            <ul>
                @foreach($errors->all() as $error)
                    <li>{{ $error }}</li>
                @endforeach
            </ul>
        </div>
    @endif

    <form action="{{ route('mahasiswa.update', $mahasiswa->id) }}" method="POST">
        @csrf
        @method('PUT')
        <div class="form-group">
            <label for="nama">Nama:</label>
            <input type="text" class="form-control" id="nama" name="nama" value="{{ $mahasiswa->nama }}">
        </div>
        <div class="form-group">
            <label for="nim">NIM:</label>
            <input type="text" class="form-control" id="nim" name="nim" value="{{ $mahasiswa->nim }}">
        </div>
        <div class="form-group">
            <label for="prodi_id">Prodi ID:</label>
            <input type="text" class="form-control" id="prodi_id" name="prodi_id" value="{{ $mahasiswa->prodi_id }}">
        </div>
        <button type="submit" class="btn btn-primary">Simpan Perubahan</button>
    </form>
@endsection
