<!-- resources/views/dosen/show.blade.php -->

@extends('layouts.app') <!-- Pastikan menggunakan layout yang sudah Anda atur -->

@section('content')
    <h1>Detail Dosen</h1>

    <p><strong>ID:</strong> {{ $dosen->id }}</p>
    <p><strong>Nama:</strong> {{ $dosen->nama }}</p>
    <p><strong>NIP:</strong> {{ $dosen->nip }}</p>
    <p><strong>Prodi ID:</strong> {{ $dosen->prodi_id }}</p> <!-- Sesuaikan dengan field yang sesuai -->
    
    <a href="{{ route('dosen.index') }}" class="btn btn-secondary">Kembali</a>
@endsection
