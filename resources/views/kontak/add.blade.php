@extends('layouts.main')

@section('title')
    <title>
        PROFILE ADD
    </title>
@endsection


@section('main')

<div class="d-flex justify-content-center">
    <div class="container w-50 mt-5">
        <div class="card p-5 shadow">
            <h2 class="mb-4">Masukan kontak</h2>
            <form action="/kontak" method="post">
                @csrf
                <input type="text" name="nama_kontak" class="form-control shadow-sm" placeholder="nama kontak">

                <button type="submit" class="btn btn-primary fw-bold mt-3">Tambah</button>
            </form>
        </div>
    </div>
</div>

@endsection