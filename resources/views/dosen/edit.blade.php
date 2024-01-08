<!-- resources/views/dosen/edit.blade.php -->

@extends('layouts.app')

@section('content')
    <h1>Edit Data Dosen</h1>

    @if($errors->any())
        <div class="alert alert-danger">
            <ul>
                @foreach($errors->all() as $error)
                    <li>{{ $error }}</li>
                @endforeach
            </ul>
        </div>
    @endif

    <form action="{{ route('dosen.update', $dosen->id) }}" method="POST">
        @csrf
        @method('PUT')
        <div class="form-group">
            <label for="nama">Nama:</label>
            <input type="text" class="form-control" id="nama" name="nama" value="{{ $dosen->nama }}">
        </div>
        <div class="form-group">
            <label for="nip">NIP:</label>
            <input type="text" class="form-control" id="nip" name="nip" value="{{ $dosen->nip }}">
        </div>
        <div class="form-group">
            <label for="prodi_id">Prodi ID:</label>
            <input type="text" class="form-control" id="prodi_id" name="prodi_id" value="{{ $dosen->prodi_id }}">
        </div>
        <button type="submit" class="btn btn-primary">Simpan Perubahan</button>
    </form>
@endsection
