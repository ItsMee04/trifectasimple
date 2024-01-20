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
                                <br>
                                <ul>
                                    <a class="printimg" href="/printbarcode/{{ $listproduk->kodeproduk }}" target="_blank">
                                        <button type="button" class="btn btn-rounded btn-submit" data-bs-toggle="tooltip"
                                            data-bs-placement="top" title="Print Barcode"><i class="fas fa-print"> Print
                                                Barcode</i></button>
                                    </a>

                                    <a class="printimg" href="/tambah-cart/{{ $listproduk->kodeproduk }}" data-bs-toggle="modal"
                                        data-bs-target="#create">
                                        <button type="button" class="btn btn-rounded btn-cancel" data-bs-toggle="tooltip"
                                            data-bs-placement="top" title="Add To Cart"><i class="fas fa-shopping-cart"> Add
                                                To Cart</i></button>
                                    </a>
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

    <div class="modal fade" id="create" tabindex="-1" aria-labelledby="create" aria-hidden="true">
        <div class="modal-dialog modal-lg modal-dialog-centered" role="document">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title">Tambah Customer</h5>
                    <button type="button" class="close" data-bs-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">×</span>
                    </button>
                </div>
                <div class="modal-body">
                    <form action="customer" method="POST">
                        <div class="row">
                            <div class="form-group">
                                <label>Nama Customer</label>
                                <select class="select form-control form-white" name="customer" required>
                                    @foreach ($listcustomer as $itemcustomer)
                                        <option value="{{$itemcustomer->id}}">{{$itemcustomer->customer}}</option>
                                    @endforeach
                                </select>
                            </div>
                            <div class="form-group">
                                <label>NIK Customer</label>
                                <input type="text" class="form-control form-white" name="nikcustomer"
                                    placeholder="Masukan NIK Customer" required>
                            </div>
                            <div class="form-group">
                                <label>Kontak Customer</label>
                                <input type="text" class="form-control form-white" name="kontakcustomer"
                                    placeholder="Masukan Kontak Customer" required>
                            </div>
                            <div class="form-group">
                                <label>Tanggal Lahir Customer</label>
                                <input type="date" class="form-control form-white" name="tanggallahircustomer"
                                    placeholder="Masukan Kontak Customer" required>
                            </div>
                            <div class="form-group">
                                <label>Alamat</label>
                                <textarea class="form-control form-white" placeholder="Masukan Alamat" name="alamatcustomer"></textarea>
                            </div>
                        </div>
                        <div class="col-lg-12">
                            <a class="btn btn-submit me-2">Submit</a>
                            <a class="btn btn-cancel" data-bs-dismiss="modal">Cancel</a>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
@endsection
