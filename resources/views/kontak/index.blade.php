@extends('layouts.main')

@section('title')
    <title>
        kontak
    </title>
@endsection


@section('main')

<div class="container mt-5">
    <a href="/kontak/add" class="btn btn-success mb-3 px-5 fw-bold">Add</a>
    <table class="table w-50 table-bordered border-dark shadow table-striped">
        <tr>
            <th>Id</th>
            <th>Nama kontak</th>
            <th>Action</th>
        </tr>
        @foreach($kontak as $data)
            <tr>
                <td>{{ $data->kd_kontak }}</td>
                <td>{{ $data->nama_kontak }}</td>
                <td class="d-flex justify-content-evenly ">
                    <a href="/kontak/{{ $data->kd_kontak }}/edit" class="btn fw-bold btn-warning ">EDIT</a>
                    <!-- <form action="/kontak/{{ $data->kd_kontak }}" method="post">
                        @csrf
                        @method("delete")
                        <button type="submit" class="btn fw-bold btn-danger">Delete</button>
                    </form> -->
                    <a href="#" onclick="ModalHapusKontak( {{ $data->kd_kontak }} )" class="btn btn-danger">Delete</a>
                </td>
            </tr>
        @endforeach
    </table>
</div>

<form action="kontak/hapus" method="post">
    @csrf
    <div class="modal fade" id="ModalHapusKontak" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
        <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header">
            <h5 class="modal-title" id="exampleModalLabel">Hapus kontak</h5>
            <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
            <div class="modal-body">Data yang dihapus tidak akan bisa dikembalikan.</div>
            <div class="modal-footer">
                <input type="hidden" name="kd_kontak">
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

    function ModalHapusKontak ($id) {
        $('[name="kd_kontak"]').val($id);
        $('#ModalHapusKontak').modal('show');
    }

</script>
@endsection