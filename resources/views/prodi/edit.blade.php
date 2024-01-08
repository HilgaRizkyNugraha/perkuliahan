

@extends('layouts.app')

@section('content')
    <h1>Edit Program Studi</h1>

    @if($errors->any())
        <div class="alert alert-danger">
            <ul>
                @foreach($errors->all() as $error)
                    <li>{{ $error }}</li>
                @endforeach
            </ul>
        </div>
    @endif

    <form action="{{ route('prodi.update', $prodi->id) }}" method="POST">
        @csrf
        @method('PUT')
        <div class="form-group">
            <label for="nama_prodi">Nama Program Studi:</label>
            <input type="text" class="form-control" id="nama_prodi" name="nama_prodi" value="{{ $prodi->nama_prodi }}">
        </div>
        <button type="submit" class="btn btn-primary">Simpan Perubahan</button>
    </form>
@endsection
