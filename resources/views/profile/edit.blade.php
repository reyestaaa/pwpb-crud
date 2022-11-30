@extends('layouts.main')

@section('title')
    <title>
        PROFILE
    </title>
@endsection


@section('main')

<div class="container mt-5">
    <form action="/profile/{{ $profile->kd_profile }}" method="post">

        @method('put')
        @csrf
        <input type="text" name="kd_profile" value="{{ $profile->kd_profile }}">
        <input type="text" value="{{ $profile->nama_profile }}" class="form-control" name="nama_profile" placeholder="nama">
        <button type="submit">Update</button>

    </form>
</div>

@endsection