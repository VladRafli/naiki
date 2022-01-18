@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-12 mb-5">
            <img src="{{ url('images/logo.png') }}" class = "rounded mx-auto d-block" width="700" alt="">
        </div>
        @foreach($items as $item)
        <div class="col-md-4">
            <div class="col">
                <div class="card h-100 shadow-sm"> <img src="{{ url('uploads')}}/{{ $item->gambar}}" class="card-img-top" alt="...">
                    <h4 >
                        <div class="rounded mx-auto d-block text-center" >{{ $item->nama_barang}}</div>
                    </h4>
                    <div class="card-body">
                        <div class="clearfix mb-3"><span class="float-end"></span> </div>
                        <h5 class="card-title">
                            <strong class="rounded mx-auto d-block">Pilihan warna : </strong> {{ $item->warna_barang}}
                        </h5>
                        <br>
                        <h5 class="card-title">
                            <strong class="rounded mx-auto d-block">Harga : </strong> Rp. {{ number_format($item->harga_barang)}}
                            <br></br>
                            <strong class="rounded mx-auto d-block">Stok : </strong> {{ number_format($item->stok_barang)}} pcs
                        </h5>
                        <div class="text-center my-4"> <a href="{{ url('pesan') }}/{{ $item->id_barang }}" class="btn btn-warning"> Beli / Lihat Detail </a> </div>

                        <!-- <div class="clearfix mb-1"> <span class="float-start"><i class="far fa-question-circle"></i></span> <span class="float-end"><i class="fas fa-plus"></i></span> </div> -->
                    </div>
                </div>
            </div>
        </div>
        @endforeach
        <!-- <div class="col-md-8">
            <div class="card">
                <div class="card-header">{{ __('Dashboard') }}</div>

                <div class="card-body">
                    @if (session('status'))
                        <div class="alert alert-success" role="alert">
                            {{ session('status') }}
                        </div>
                    @endif

                    {{ __('You are logged in!') }}
                </div>
            </div>
        </div> -->
    </div>
</div>
@endsection
