<!-- resources/views/mahasiswa/show.blade.php -->

@extends('layouts.app') <!-- Pastikan menggunakan layout yang sudah Anda atur -->

@section('content')
    <h1>Detail Mahasiswa</h1>

    <p><strong>ID:</strong> {{ $mahasiswa->id }}</p>
    <p><strong>Nama:</strong> {{ $mahasiswa->nama }}</p>
    <p><strong>NIM:</strong> {{ $mahasiswa->nim }}</p>
    <p><strong>Prodi ID:</strong> {{ $mahasiswa->prodi_id }}</p> <!-- Sesuaikan dengan field yang sesuai -->
    
    <a href="{{ route('mahasiswa.index') }}" class="btn btn-secondary">Kembali</a>
@endsection
