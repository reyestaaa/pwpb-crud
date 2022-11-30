@extends('layouts.main')

@section('title')
    <title>
        PROFILE EDIT
    </title>
@endsection


@section('main')

<div class="d-flex justify-content-center">
    <div class="container w-50 mt-5">
        <div class="card p-5 shadow">
            <h2 class="mb-4">Masukan berita</h2>
            <form action="/berita/{{ $berita->kd_berita }}" method="post">

                @method('put')
                @csrf
                <input type="text" value="{{ $berita->nama_berita }}" class="form-control mb-3" name="nama_berita" placeholder="nama">
                <button type="submit" class="btn btn-primary">Update</button>

            </form>
        </div>
    </div>
</div>

@endsection