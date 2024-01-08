<!-- resources/views/mata_kuliah/create.blade.php -->

@extends('layouts.app')

@section('content')
    <h1>Tambah Mata Kuliah Baru</h1>

    @if($errors->any())
        <div class="alert alert-danger">
            <ul>
                @foreach($errors->all() as $error)
                    <li>{{ $error }}</li>
                @endforeach
            </ul>
        </div>
    @endif

    <form action="{{ route('matakuliah.store') }}" method="POST">
        @csrf
        <div class="form-group">
            <label for="nama_matakuliah">Nama Mata Kuliah:</label>
            <input type="text" class="form-control" id="nama_matakuliah" name="nama_matakuliah">
        </div>
        <!-- Tambahkan form input lain sesuai kebutuhan -->
        <button type="submit" class="btn btn-primary">Simpan</button>
    </form>
@endsection
