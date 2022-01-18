@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row">
        <div class="col-md-12">
            <a href="{{ url('home') }}" class="btn btn-primary"><i class="fa fa-arrow-left"></i> Kembali</a>
        </div>
        <div class="col-md-12 mt-2">
            <nav aria-label="breadcrumb">
              <ol class="breadcrumb">
                <li class="breadcrumb-item"><a href="{{ url('home') }}">Home</a></li>
                <li class="breadcrumb-item active" aria-current="page">{{ $item->nama_barang }}</li>
              </ol>
            </nav>
        </div>
        <div class="col-md-12 mt-1">
            <div class="card">
                <div class="card-body">
                    <div class="row">
                        <div class="col-md-6">
                            <img src="{{ url('uploads') }}/{{ $item->gambar }}" class="rounded mx-auto d-block" width="100%"> 
                        </div>
                        <div class="col-md-6 mt-5">
                            <h2>{{ $item->nama_barang }}</h2>
                            <table class="table">
                                <tbody>
                                    <tr>
                                        <td>Harga :</td>
                                         
                                        <td>Rp. {{ number_format($item->harga_barang) }}</td>
                                    </tr>
                                    <tr>
                                        <td>Jumlah Stok : </td>
                                         
                                        <td>{{ number_format($item->stok_barang) }}</td>
                                    </tr>
                                    <tr>
                                        <td>Deskripsi : </td>
                                         
                                        <td>{{ $item->detail_barang }}</td>
                                    </tr>
                                   
                                    <tr>
                                        <td>Jumlah item dibeli :</td>
                                         
                                        <td>
                                            <form method="post" action="{{ url('pesan') }}/{{ $item->id_barang}}" >
                                            @csrf
                                                <input type="number" name="jumlah_pesan" class="form-control" required="">
                                                <button type="submit" class="btn btn-primary mt-10"><i class="fa fa-shopping-cart"></i> Masukkan Keranjang</button>
                                            </form>
                                        </td>
                                    </tr>
                                   
                                    
                                    
                                </tbody>
                            </table>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection