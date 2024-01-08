<!-- resources/views/mata_kuliah/show.blade.php -->

@extends('layouts.app')

@section('content')
    <h1>Detail Mata Kuliah</h1>

    <p><strong>ID:</strong> {{ $matakuliah->id }}</p>
    <p><strong>Nama Mata Kuliah:</strong> {{ $matakuliah->nama_matakuliah }}</p>
    <!-- Tampilkan atribut lain sesuai kebutuhan -->

    <a href="{{ route('matakuliah.index') }}" class="btn btn-secondary">Kembali</a>
@endsection
