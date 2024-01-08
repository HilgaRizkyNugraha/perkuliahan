<!-- resources/views/dosen/index.blade.php -->

@extends('layouts.app') <!-- Pastikan menggunakan layout yang sudah Anda atur -->

@section('content')
    <h1>Daftar Dosen</h1>

    <a href="{{ route('dosen.create') }}" class="btn btn-primary">Tambah Dosen</a>

    @if(session('success'))
        <div class="alert alert-success mt-3">
            {{ session('success') }}
        </div>
    @endif

    <table class="table mt-3">
        <thead>
            <tr>
                <th scope="col">ID</th>
                <th scope="col">Nama</th>
                <th scope="col">NIP</th>
                <th scope="col">Prodi</th>
                <th scope="col">Aksi</th>
            </tr>
        </thead>
        <tbody>
            @foreach($dosens as $dosen)
                <tr>
                    <td>{{ $dosen->id }}</td>
                    <td>{{ $dosen->nama }}</td>
                    <td>{{ $dosen->nip }}</td>
                    <td>{{ $dosen->prodi_id }}</td> <!-- Sesuaikan dengan field yang sesuai -->
                    <td>
                        <a href="{{ route('dosen.show', $dosen->id) }}" class="btn btn-info">Lihat</a>
                        <a href="{{ route('dosen.edit', $dosen->id) }}" class="btn btn-warning">Edit</a>
                        <form action="{{ route('dosen.destroy', $dosen->id) }}" method="POST" style="display: inline-block;">
                            @csrf
                            @method('DELETE')
                            <button type="submit" class="btn btn-danger" onclick="return confirm('Apakah Anda yakin ingin menghapus dosen ini?')">Hapus</button>
                        </form>
                    </td>
                </tr>
            @endforeach
        </tbody>
    </table>
@endsection
