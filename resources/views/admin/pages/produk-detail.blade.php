@extends('admin.components.index')

@section('title', 'Produk Detail')

@section('content')
    <div class="page-wrapper cardhead">
        <div class="content">

            <!-- Page Header -->
            <div class="page-header">
                <div class="row">
                    <div class="col">
                        <h3 class="page-title">PRODUK DETAIL BARANG</h3>
                        <ul class="breadcrumb">
                            <li class="breadcrumb-item"><a href="index.html">Produk Barang</a></li>
                            <li class="breadcrumb-item active">Produk Barang</li>
                        </ul>
                    </div>
                </div>
            </div>

            <div class="row">
                <div class="col-lg-8 col-sm-12">
                    <div class="card">
                        <div class="card-body">
                            <div class="bar-code-view">
                                {!! DNS2D::getBarcodeSVG($listproduk->kodeproduk, 'QRCODE') !!}
                                <a class="printimg" href="/printbarcode/{{ $listproduk->kodeproduk }}" target="_blank">
                                    <button type="button" class="btn btn-rounded btn-dark" data-bs-toggle="tooltip"
                                        data-bs-placement="top" title="Print Barcode"><i class="fas fa-print"></i></button>
                                </a>
                            </div>
                            <div class="productdetails">
                                <ul class="product-bar">
                                    <li>
                                        <h4>Nama Produk</h4>
                                        <h6>{{ $listproduk->namaproduk }}</h6>
                                    </li>
                                    <li>
                                        <h4>Harga Produk</h4>
                                        <h6>{{ 'Rp.' . ' ' . number_format($listproduk->hargaproduk, 2) }}</h6>
                                    </li>
                                    <li>
                                        <h4>Keterangan Produk</h4>
                                        <h6>{{ $listproduk->keteranganproduk }}</h6>
                                    </li>
                                    <li>
                                        <h4>Jenis Produk</h4>
                                        <h6>{{ $listproduk->jenisproduk }}</h6>
                                    </li>
                                    <li>
                                        <h4>Berat Produk</h4>
                                        <h6>{{ $listproduk->beratproduk }} gram</h6>
                                    </li>
                                    <li>
                                        <h4>Karat Produk</h4>
                                        <h6>{{ $listproduk->karatproduk }}</h6>
                                    </li>
                                </ul>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="col-lg-4 col-sm-12">
                    <div class="card">
                        <div class="card-body">
                            <div class="slider-product-details">
                                <div class="owl-carousel owl-theme product-slide">
                                    <div class="slider-product">
                                        <img src="{{ asset('storage/fotoproduk/' . $listproduk->fotoproduk) }}"
                                            alt="product">
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

@endsection
