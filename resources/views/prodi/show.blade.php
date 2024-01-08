
@extends('layouts.app')

@section('content')
    <h1>Detail Program Studi</h1>

    <p><strong>ID:</strong> {{ $prodi->id }}</p>
    <p><strong>Nama Program Studi:</strong> {{ $prodi->nama_prodi }}</p>
    
    <a href="{{ route('prodi.index') }}" class="btn btn-secondary">Kembali</a>
@endsection
