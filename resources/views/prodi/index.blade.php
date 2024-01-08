<!-- resources/views/prodi/index.blade.php -->

@extends('layouts.app')

@section('content')
    <h1>Daftar Program Studi</h1>

    <a href="{{ route('prodi.create') }}" class="btn btn-primary">Tambah Program Studi</a>

    @if(session('success'))
        <div class="alert alert-success mt-3">
            {{ session('success') }}
        </div>
    @endif

    <table class="table mt-3">
        <thead>
            <tr>
                <th scope="col">ID</th>
                <th scope="col">Nama Program Studi</th>
                <th scope="col">Aksi</th>
            </tr>
        </thead>
        <tbody>
            @foreach($prodis as $prodi)
                <tr>
                    <td>{{ $prodi->id }}</td>
                    <td>{{ $prodi->nama_prodi }}</td>
                    <td>
                        <a href="{{ route('prodi.show', $prodi->id) }}" class="btn btn-info">Lihat</a>
                        <a href="{{ route('prodi.edit', $prodi->id) }}" class="btn btn-warning">Edit</a>
                        <form action="{{ route('prodi.destroy', $prodi->id) }}" method="POST" style="display: inline-block;">
                            @csrf
                            @method('DELETE')
                            <button type="submit" class="btn btn-danger" onclick="return confirm('Apakah Anda yakin ingin menghapus program studi ini?')">Hapus</button>
                        </form>
                    </td>
                </tr>
            @endforeach
        </tbody>
    </table>
@endsection
