@extends('layouts.main')

@section('title')
    <title>
        PROFILE
    </title>
@endsection


@section('main')

<div class="container mt-5">
    <a href="/profile/add" class="btn btn-success mb-3 px-5 fw-bold">Add</a>
    <table class="table w-50 table-bordered border-dark shadow table-striped">
        <tr>
            <th>Id</th>
            <th>Nama Profile</th>
            <th>Action</th>
        </tr>
        @foreach($profile as $data)
            <tr>
                <td>{{ $data->kd_profile }}</td>
                <td>{{ $data->nama_profile }}</td>
                <td class="d-flex justify-content-evenly ">
                    <a href="/profile/{{ $data->kd_profile }}/edit" class="btn fw-bold btn-warning ">EDIT</a>
                    <!-- <form action="/profile/{{ $data->kd_profile }}" method="post">
                        @csrf
                        @method("delete")
                        <button type="submit" class="btn fw-bold btn-danger">Delete</button>
                    </form> -->
                    <a href="#" onclick="ModalHapusProfile( {{ $data->kd_profile }} )" class="btn btn-danger">Delete</a>
                </td>
            </tr>
        @endforeach
    </table>
</div>


<form action="profile/hapus" method="post">
    @csrf
    <div class="modal fade" id="ModalHapusProfile" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
        <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header">
            <h5 class="modal-title" id="exampleModalLabel">Hapus profile</h5>
            <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
            <div class="modal-body">Data yang dihapus tidak akan bisa dikembalikan.</div>
            <div class="modal-footer">
                <input type="hidden" name="kd_profile">
                <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Batal</button>
                <input type="submit" class="btn btn-primary" name="simpan" value="Hapus">
            </div>
        </div>
        </div>
    </div>
</form>

@endsection


@section('js')

<script>

    function ModalHapusProfile ($id) {
        $('[name="kd_profile"]').val($id);
        $('#ModalHapusProfile').modal('show');
    }

</script>
@endsection