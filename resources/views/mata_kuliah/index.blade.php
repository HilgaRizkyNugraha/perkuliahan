<!-- resources/views/mata_kuliah/index.blade.php -->

@extends('layouts.app')

@section('content')
    <h1>Daftar Mata Kuliah</h1>

    <a href="{{ route('matakuliah.create') }}" class="btn btn-primary">Tambah Mata Kuliah</a>

    @if(session('success'))
        <div class="alert alert-success mt-3">
            {{ session('success') }}
        </div>
    @endif

    <table class="table mt-3">
        <thead>
            <tr>
                <th scope="col">ID</th>
                <th scope="col">Nama Mata Kuliah</th>
                <!-- Tambahkan header lain jika diperlukan -->
                <th scope="col">Aksi</th>
            </tr>
        </thead>
        <tbody>
            @foreach($mataKuliahs as $matakuliah)
                <tr>
                    <td>{{ $matakuliah->id }}</td>
                    <td>{{ $matakuliah->nama_matakuliah }}</td>
                    <!-- Tambahkan kolom lain jika diperlukan -->
                    <td>
                        <a href="{{ route('matakuliah.show', $matakuliah->id) }}" class="btn btn-info">Lihat</a>
                        <a href="{{ route('matakuliah.edit', $matakuliah->id) }}" class="btn btn-warning">Edit</a>
                        <form action="{{ route('matakuliah.destroy', $matakuliah->id) }}" method="POST" style="display: inline-block;">
                            @csrf
                            @method('DELETE')
                            <button type="submit" class="btn btn-danger" onclick="return confirm('Apakah Anda yakin ingin menghapus mata kuliah ini?')">Hapus</button>
                        </form>
                    </td>
                </tr>
            @endforeach
        </tbody>
    </table>
@endsection
