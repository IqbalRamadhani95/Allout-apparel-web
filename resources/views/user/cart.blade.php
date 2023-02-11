@extends('user.base')

@section('content')
    <div class="container cart">
        <p>Keranjang Belanja</p>
        <div class="row">
            <div class="col-md-8">
                <div class="cart-produk">
                    <div class="row row-cols-1 row-cols-sm-2">
                        <div class="col-md-8 d-flex">
                            <img src="./images/simple3.jpg" class="img-cart" alt="">
                            <div class="ms-3">
                                <p>Allout</p>
                                <p>Mr. Simple T-shirt</p>
                                <p style="font-size: 13px;">Rp. 80.000</p>
                                <P style="font-size: 13px;">Ukuran : XL</P>
                            </div>
                        </div>
                        <div class="col-md-4">
                            
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-md-4">
                <div class="form-checkout">
                    <p class="text-center">Ringkasan Belanja</p>
                    <div class="harga">
                        <p style="font-size: 13px;">Total harga (1 produk) :</p>
                        <p style="font-size: 13px;">Rp.80.000</p>
                    </div>
                    <button class="btn btn-cart">
                        Checkout
                    </button>
                </div>
            </div>
        </div>
    </div>
@endsection
