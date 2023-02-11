@extends('user.base')

@section('content')
    <div class="container product">
        <h2>OUR PRODUCT</h2>
        <div class="row row-cols-1 row-cols-md-4 g-5">
            @foreach ($data as $item)
                <div class="col">
                    <div class="card">
                        <img src="{{ asset('storage/images/' .$item->foto) }}" class="card-img-top" alt="Hollywood Sign on The Hill" />
                        <div class="card-body">
                            <h5 class="card-title">{{ $item->nama }}</h5>
                            <p class="card-text">
                                Rp. {{ $item->harga }}
                            </p>
                        </div>
                        <div class="card-footer text-center">
                            <a href="/detail-product">
                                <button class="badge button1">
                                    Check Detail
                                </button>
                            </a>
                        </div>
                    </div>
                </div>
            @endforeach
        </div>
    </div>
@endsection
