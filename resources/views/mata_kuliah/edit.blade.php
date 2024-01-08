<!-- resources/views/mata_kuliah/edit.blade.php -->

@extends('layouts.app')

@section('content')
    <h1>Edit Mata Kuliah</h1>

    @if($errors->any())
        <div class="alert alert-danger">
            <ul>
                @foreach($errors->all() as $error)
                    <li>{{ $error }}</li>
                @endforeach
            </ul>
        </div>
    @endif

    <form action="{{ route('matakuliah.update', $matakuliah->id) }}" method="POST">
        @csrf
        @method('PUT')
        <div class="form-group">
            <label for="nama_matakuliah">Nama Mata Kuliah:</label>
            <input type="text" class="form-control" id="nama_matakuliah" name="nama_matakuliah" value="{{ $matakuliah->nama_matakuliah }}">
        </div>
        <!-- Tambahkan form input lain sesuai kebutuhan -->
        <button type="submit" class="btn btn-primary">Simpan Perubahan</button>
    </form>
@endsection
