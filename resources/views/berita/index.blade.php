@extends('layouts.main')

@section('title')
    <title>
        berita
    </title>
@endsection


@section('main')

<div class="container mt-5">
    <a href="/berita/add" class="btn btn-success mb-3 px-5 fw-bold">Add</a>
    <table class="table w-100 table-bordered border-dark shadow table-striped">
        <tr>
            <th>Id</th>
            <th>Nama berita</th>
            <th>Action</th>
        </tr>
        @foreach($berita as $data)
            <tr>
                <td>{{ $data->kd_berita }}</td>
                <td>{{ $data->nama_berita }}</td>
                <td class="d-flex justify-content-evenly ">
                    <!-- <a href="/berita/{{ $data->kd_berita }}/edit" class="btn fw-bold btn-warning ">EDIT</a> -->
                    <!-- <form action="/berita/{{ $data->kd_berita }}" method="post">
                        @csrf
                        @method("delete")
                        <button type="submit" class="btn fw-bold btn-danger">Delete</button>
                    </form> -->
                    <!-- <a href="#" onclick="ModalEditBerita({{ $data->kd_berita }})" class="btn btn-info" name="{{ $data->nama_berita }}">Update</a> -->
                    <button onclick="ModalEditBerita({{ $data->kd_berita }} ,'{{ $data->nama_berita }}')" class="btn btn-info" >Update</button>
                    <a href="#" onclick="ModalHapusBerita( {{ $data->kd_berita }} )" class="btn btn-danger">Delete</a>
                </td>
            </tr>
        @endforeach
    </table>
</div>

<form action="berita/hapus" method="post">
    @csrf
    <div class="modal fade" id="ModalHapusBerita" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
        <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header">
            <h5 class="modal-title" id="exampleModalLabel">Hapus berita</h5>
            <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
            <div class="modal-body">Data yang dihapus tidak akan bisa dikembalikan.</div>
            <div class="modal-footer">
                <input type="hidden" name="kd_berita">
                <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Batal</button>
                <input type="submit" class="btn btn-primary" name="simpan" value="Hapus">
            </div>
        </div>
        </div>
    </div>
</form>

<form action="berita/edit" method="post">
    @csrf
<div class="modal fade" id="ModalEditBerita" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog ">
        <div class="modal-content">
        <div class="modal-header">
            <h5 class="modal-title" >Form Ubah</h5>
            <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
        </div>
        <div class="modal-body">

            <div class="mb-3">
                <label  class="form-label">Kode Berita</label>
                <input type="text" class="form-control" name="kd_berita" required>
            </div>
            <div class="mb-3">
                <label  class="form-label">Nama Berita</label>
                <input type="text" class="form-control" name="nama_berita"  required>
            </div>
        </div>
        <div class="modal-footer">
            <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Batal</button>
            <input type="submit" class="btn btn-primary" name="ubah" value="Ubah">
        </div>
        </div>
    </div>
</div>
</form>

<!-- <form action="berita/edit" method="post">
    @csrf
<div class="modal fade" id="ModalEditBerita" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog ">
        <div class="modal-content">
        <div class="modal-header">
            <h5 class="modal-title" >Form Ubah</h5>
            <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
        </div>
        <div class="modal-body">

            <div class="mb-3">
                <label  class="form-label">Kode Berita</label>
                <input type="text" class="form-control" name="kd_berita" required>
            </div>
            <div class="mb-3">
                <label  class="form-label">Nama Berita</label>
                <input type="text" class="form-control" name="nama_berita" required>
            </div>
        </div>
        <div class="modal-footer">
            <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Batal</button>
            <input type="submit" class="btn btn-primary" name="ubah" value="Ubah">
        </div>
        </div>
    </div>
</div>
</form> -->



@endsection
@section('js')

<script>

    function ModalHapusBerita ($id) {
        $('[name="kd_berita"]').val($id);
        $('#ModalHapusBerita').modal('show');
    }

    // function ModalEditBerita ($id,$nama) {
    //     $('[name="kd_berita"]').val($id);
    //     $('[name="nama_berita"]').val($nama);
    //     $('#ModalEditBerita').modal('show');
    // }

    function ModalEditBerita (id,nama) {
    
        $('[name="kd_berita"]').val(id);
        $('[name="nama_berita"]').val(nama);
        $('#ModalEditBerita').modal('show');
    }

</script>
@endsection