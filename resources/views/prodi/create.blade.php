<!-- resources/views/prodi/create.blade.php -->

@extends('layouts.app')

@section('content')
    <h1>Tambah Program Studi Baru</h1>

    @if($errors->any())
        <div class="alert alert-danger">
            <ul>
                @foreach($errors->all() as $error)
                    <li>{{ $error }}</li>
                @endforeach
            </ul>
        </div>
    @endif

    <form action="{{ route('prodi.store') }}" method="POST">
        @csrf
        <div class="form-group">
            <label for="nama_prodi">Nama Program Studi:</label>
            <input type="text" class="form-control" id="nama_prodi" name="nama_prodi">
        </div>
        <button type="submit" class="btn btn-primary">Simpan</button>
    </form>
@endsection
