@extends('user.base')

@section('content')
    <div class="container detail-product">
        <p style="font-size: 13px">
            Allout apparel <i class="fas fa-angle-double-right"></i> Product Detail
        </p>
        <div class="row">
            <div class="col-md-4 text-center">
                <img src="{{ asset('storage/images/' .$data->foto) }}" class="img-detail" alt="">
            </div>
            <div class="col-md-4">
                <div class="deskripsi">
                    <p>Deskripsi :</p>
                    <p style="font-size: 13px">
                        -100% Produk Original Allout <br>
                        -Material 100% Katun <br>
                        -Detail Warna Jet Black
                    </p>
                    <p>Catatan :</p>
                    <p style="font-size: 13px">
                        Warna yang terlihat pada foto produk mungkin tidak 100% sama dengan produk aslinya, dikarenakan
                        faktor
                        cahaya pada pengambilan gambar ataupun pada kondisi gadget yang digunakan untuk melihat gambar.
                    </p>
                    <p style="font-size: 13px">
                        Mohon periksa kembali pesanannya karena jika pesanan sudah di proses tidak dapat dibatalkan.
                    </p>
                </div>
            </div>
            <div class="col-md-4">
                <div class="form-beli">
                    <p>ALLOUT apparel</p>
                    <h4>{{ $data->nama }} T-shirt</h4>
                    <p>Rp. {{ number_format($data->harga) }}</p>
                    <p>Ukuran</p>
                    <div class="btn-group mb-3">
                        <input type="radio" class="btn-check" name="options" id="option1" autocomplete="off" />
                        <label class="btn btn-secondary" for="option1">S</label>

                        <input type="radio" class="btn-check" name="options" id="option2" autocomplete="off" />
                        <label class="btn btn-secondary" for="option2">M</label>

                        <input type="radio" class="btn-check" name="options" id="option3" autocomplete="off" />
                        <label class="btn btn-secondary" for="option3">L</label>

                        <input type="radio" class="btn-check" name="options" id="option4" autocomplete="off" />
                        <label class="btn btn-secondary" for="option4">XL</label>
                    </div>
                    <p>Jumlah</p>
                    <div class="form-outline">
                        <input type="number" id="typeNumber" class="form-control" />
                        <label class="form-label" for="typeNumber">Masukkan Jumlah</label>
                    </div>
                    <a href="/cart-product">
                        <button class="btn btn-beli">
                            Beli Sekarang
                        </button>
                    </a>
                </div>
            </div>
        </div>
    </div>

    <script>
        
    </script>
@endsection
