@extends('adminlte::page')

@section('title', 'Berita')

@section('content_header')
    <h1 class="m-0 text-dark">Berita</h1>
@stop


@section('content')
<div class="container position-relative">
            <div class="card top-50 start-50 translate-middle">
                <div class="card-header">
                    <span>Berita </span>
                    <a href="#" class="btn btn-primary " style="float: right"  data-toggle="modal"
                    data-target="#modalTambah" >+ Tambah Berita</a>
                </div>
                <div class="card-body">
                    <table class="table table-striped-column table-hover">
                        <thead>
                            <tr>
                                <th scope="col">No</th>
                                <th scope="col">Judul</th>
                                <th scope="col">Kategori</th>
                                <th scope="col">User</th>
                                <th scope="col">Foto</th>
                                <th scope="col">Isi</th>
                                <th scope="col">Aksi</th>
                            </tr>
                        </thead>
                        <tbody>
                            <tr>
                                <td>1</td>
                                <td>Maling Kundang</td>
                                <td>Pendidikan</td>
                                <td>Admin</td>
                                <td><img src="" alt="" srcset="" width="200px"></td>
                                <td>jkskjdfjkdsjk</td>
                                <td><button type="button" class="btn btn-success px-1"
                                        data-toggle="modal" data-target="#modalEdit">
                                        Edit
                                    </button>
                                    <button class="btn btn-danger px-1" data-toggle="modal"
                                        data-target="#modalHapus" >
                                        Hapus
                                    </button>
                                </td>
                            </tr>
                        </tbody>
                        </table>

                </div>
            </div>
</div>


{{-- modal tambah --}}
    <div class="modal fade modalTambah " id="modalTambah" tabindex="-1" role="dialog" aria-labelledby="modalEditTitle"
    aria-hidden="true">
    <div class="modal-dialog modal-dialog-centered " role="document">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="exampleModalLongTitle">Tambah berita</h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <div class="modal-body">
                <form action="" method="post" id="formEdit" enctype="multipart/form-data">
                    @method('patch')
                    @csrf
                    <div class="form-group">
                        <label for="kategori">Judul</label>
                        <input type="text" class="form-control" id="judulEdit" aria-describedby="emailHelp"
                            name="judul" required>
                    </div>
                    <div class="form-group">
                        <label for="kategori">Kategori</label>
                        <select class="form-control" id="kategori" name="kategori_id" required>
                            <option >Pendidikan</option>
                            <option >POlotik</option>
                        </select>
                    </div>
                    <img src="" alt="" id="fotoLama" srcset="" width="200px">
                    <div class="form-group">
                        <label for="kategori">Foto</label>
                        <input type="file" class="form-control" id="fotoEdit" aria-describedby="emailHelp"
                            name="foto">
                        <small>*opsional</small>
                    </div>
                    <div class="form-group">
                        <label for="isi">Isi Berita</label>
                        <textarea class="form-control" id="isiEdit" rows="3" name="isi" required></textarea>
                    </div>
                    <button type="submit" class="btn btn-primary me-2">Tambah</button>
                    <button class="btn btn-danger" data-dismiss="modal">Cancel</button>
                </form>
            </div>
        </div>
    </div>
    </div>

    {{-- Modal Edit --}}
    <div class="modal fade modalEdit " id="modalEdit" tabindex="-1" role="dialog" aria-labelledby="modalEditTitle"
        aria-hidden="true">
        <div class="modal-dialog modal-dialog-centered " role="document">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="exampleModalLongTitle">Edit berita</h5>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
                </div>
                <div class="modal-body">
                    <form action="" method="post" id="formEdit" enctype="multipart/form-data">
                        @method('patch')
                        @csrf
                        <div class="form-group">
                            <label for="kategori">Judul</label>
                            <input type="text" class="form-control" id="judulEdit" aria-describedby="emailHelp"
                                name="judul" required>
                        </div>
                        <div class="form-group">
                            <label for="kategori">Kategori</label>
                            <select class="form-control" id="kategori" name="kategori_id" required>
                                <option >Pendidikan</option>
                            </select>
                        </div>
                        <img src="" alt="" id="fotoLama" srcset="" width="200px">
                        <div class="form-group">
                            <label for="kategori">Foto</label>
                            <input type="file" class="form-control" id="fotoEdit" aria-describedby="emailHelp"
                                name="foto">
                            <small>*opsional</small>
                        </div>
                        <div class="form-group">
                            <label for="isi">Isi Berita</label>
                            <textarea class="form-control" id="isiEdit" rows="3" name="isi" required></textarea>
                        </div>
                        <button type="submit" class="btn btn-primary me-2">Edit</button>
                        <button class="btn btn-danger" data-dismiss="modal">Cancel</button>
                    </form>
                </div>
            </div>
        </div>
    </div>


    <!-- Modal Hapus-->
    <div class="modal fade modalHapus" id="modalHapus" tabindex="-1" role="dialog" aria-labelledby="modalHapusTitle"
    aria-hidden="true">
    <div class="modal-dialog modal-dialog-centered" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="exampleModalLongTitle">Hapus Berita</h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <div class="modal-body">
                <form action="" method="post" id="formHapus">
                    @method('delete')
                    @csrf
                    <p class="modal-text"></p>
                    <button type="submit" class="btn btn-danger">Hapus</button>
                    <button type="button" class="btn btn-secondary" data-dismiss="modal">Batal</button>
                </form>
            </div>
        </div>
    </div>
</div>

@stop

@section('script')
<script src="https://code.jquery.com/jquery-3.6.0.slim.js"
integrity="sha256-HwWONEZrpuoh951cQD1ov2HUK5zA5DwJ1DNUXaM6FsY=" crossorigin="anonymous"></script>

@endsection

