@extends('admin.baseAdmin')

@section('contentAdmin')
    <!-- Begin Page Content -->
    <div class="container-fluid">

        <!-- Page Heading -->
        <h1 class="h3 mb-2 text-gray-800">Product</h1>

        <!-- DataTales Example -->
        <div class="card shadow mb-4">
            <div class="card-header d-flex py-3">
                <!-- Button trigger modal -->
                <button type="button" class="btn btn-primary" data-toggle="modal" data-target="#exampleModalCenter">
                    Tambah Product
                </button>

                <!-- Modal -->
                <div class="modal fade" id="exampleModalCenter" tabindex="-1" role="dialog"
                    aria-labelledby="exampleModalCenterTitle" aria-hidden="true">
                    <!-- Add .modal-dialog-centered to .modal-dialog to vertically center the modal -->
                    <div class="modal-dialog modal-dialog-centered modal-dialog-scrollable" role="document">
                        <div class="modal-content">
                            <div class="modal-header">
                                <h5 class="modal-title" id="exampleModalLongTitle">Tambah Produk</h5>
                                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                    <span aria-hidden="true">&times;</span>
                                </button>
                            </div>
                            <div class="modal-body">
                                <form action="/product_admin/insert" method="post" enctype="multipart/form-data">
                                    @csrf
                                    <div class="card-body">
                                        <div class="form-group">
                                            <label for="nama">nama produk</label>
                                            <input type="text" class="form-control" id="nama" name="nama"
                                                placeholder="masukkan nama produk" required>
                                        </div>
                                        <div class="form-group">
                                            <label for="foto">gambar produk</label>
                                            <input type="file" class="form-control" id="foto" name="foto"
                                                placeholder="masukkan foto">
                                        </div>
                                        <div class="form-group">
                                            <label>Deskripsi</label>
                                            {{-- <textarea type="text" class="form-control" id="deskripsi" name="deskripsi" placeholder="masukkan deskripsi produk"></textarea> --}}
                                            <input id="deskripsi" type="hidden" name="deskripsi">
                                            <trix-editor input="deskripsi"></trix-editor>
                                        </div>
                                        <div class="form-group">
                                            <label for="harga">Harga</label>
                                            <input type="number" class="form-control" id="harga" name="harga"
                                                placeholder="masukkan harga produk">
                                        </div>
                                        <div class="form-group">
                                            <label for="pekerjaan">Pekerjaan</label>
                                            <select id="pekerjaan" name="kategori" class="form-control">
                                                <option value="1">Kaos</option>
                                                <option value="2">Kemeja</option>
                                                <option value="3">Jaket</option>
                                            </select>
                                        </div>
                                        <div class="text-center">
                                            <button type="submit" class="btn btn-primary mt-3">Simpan</button>
                                        </div>
                                    </div>
                                </form>
                            </div>
                        </div>
                    </div>
                </div>
                {{-- end modal --}}
            </div>
            <div class="card-body">
                <div class="table-responsive">
                    <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
                        <thead>
                            <tr>
                                <th>No.</th>
                                <th>Nama</th>
                                <th>Foto</th>
                                <th>Deskripsi</th>
                                <th>Harga</th>
                                <th>Kategori</th>
                                <th>aksi</th>
                            </tr>
                        </thead>
                        <tbody>
                            @foreach ($data as $datas)
                                <tr>
                                    <td>{{ $loop->index + 1 }}</td>
                                    <td>{{ $datas->nama }}</td>
                                    <td>
                                        <img src="{{ asset('storage/images/' . $datas->foto) }}" alt=""
                                            class="img-responsive" style="max-width: 80px;">
                                    </td>
                                    <td>{!! $datas->deskripsi !!}</td>
                                    <td>{{ $datas->harga }}</td>
                                    <td>{{ $datas->kategori }}</td>
                                    <td>

                                        <button type="button" class="btn btn-warning" data-toggle="modal"
                                            data-target="#dataProduk{{ $datas->id }}">
                                            <i class="far fa-edit"></i></button>
                                        </button>

                                        <!-- Modal -->
                                        <div class="modal fade" id="dataProduk{{ $datas->id }}" tabindex="-1"
                                            role="dialog" aria-labelledby="dataProdukTitle" aria-hidden="true">
                                            <!-- Add .modal-dialog-centered to .modal-dialog to vertically center the modal -->
                                            <div class="modal-dialog modal-dialog-centered modal-dialog-scrollable"
                                                role="document">
                                                <div class="modal-content">
                                                    <div class="modal-header">
                                                        <h5 class="modal-title" id="exampleModalLongTitle">Edit Produk
                                                        </h5>
                                                        <button type="button" class="close" data-dismiss="modal"
                                                            aria-label="Close">
                                                            <span aria-hidden="true">&times;</span>
                                                        </button>
                                                    </div>
                                                    <div class="modal-body">
                                                        <form action="/product_admin/{{ $datas->id }}" method="post"
                                                            enctype="multipart/form-data">
                                                            @method('put')
                                                            @csrf
                                                            <input type="hidden" name="id"
                                                                value="{{ $datas->id }}">
                                                            <div class="card-body">
                                                                <div class="form-group">
                                                                    <label for="nama">nama produk</label>
                                                                    <input type="text" class="form-control"
                                                                        id="nama" name="nama"
                                                                        value="{{ $datas->nama }}" required>
                                                                </div>
                                                                <div class="form-group">
                                                                    <label for="foto">gambar produk</label>
                                                                    <div>
                                                                        <img src="{{ asset('storage/images/' . $datas->foto) }}"
                                                                            alt="" class="img-preview mb-3"
                                                                            width="80">
                                                                    </div>
                                                                    <input type="file" class="form-control"
                                                                        id="foto" name="foto_update"
                                                                        value="{{ $datas->foto }}">
                                                                </div>
                                                                <div class="form-group">
                                                                    <label for="deskripsi">Deskripsi</label>
                                                                    <input id="{{ $datas->id }}" value="{{ $datas->deskripsi }}"
                                                                        type="hidden" name="deskripsi">
                                                                    <trix-editor input="{{ $datas->id }}"></trix-editor>
                                                                </div>
                                                                <div class="form-group">
                                                                    <label for="harga">Harga</label>
                                                                    <input type="number" class="form-control"
                                                                        id="harga" name="harga"
                                                                        value="{{ $datas->harga }}">
                                                                </div>
                                                                <div class="form-group">
                                                                    <label for="pekerjaan">Pekerjaan</label>
                                                                    <select id="pekerjaan" name="kategori"
                                                                        class="form-control">
                                                                        <option value="1">Kaos</option>
                                                                        <option value="2">Kemeja</option>
                                                                        <option value="3">Jaket</option>
                                                                    </select>
                                                                </div>
                                                                <div class="text-center">
                                                                    <button type="submit"
                                                                        class="btn btn-primary mt-3">Simpan
                                                                    </button>
                                                                </div>
                                                            </div>
                                                        </form>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        {{-- end modal --}}
                                        <button type="submit" class="btn btn-danger ml-2 delete" data-id={{ $datas->id }}>
                                            <i class="far fa-trash-alt"></i>
                                        </button>
                                    </td>
                                </tr>
                            @endforeach
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
    </div>
    <!-- /.container-fluid -->
@endsection
