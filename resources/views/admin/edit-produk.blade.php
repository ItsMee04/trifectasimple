@extends('admin.components.index')

@section('title','Produk Edit')

@section('content')
<div class="page-wrapper cardhead">
    <div class="content">

        <!-- Page Header -->
		<div class="page-header">
            <div class="row">
                <div class="col">
                    <h3 class="page-title">PRODUK BARANG</h3>
                    <ul class="breadcrumb">
                        <li class="breadcrumb-item"><a href="index.html">Produk Barang</a></li>
                        <li class="breadcrumb-item active">Produk Barang</li>
                    </ul>
                </div>
            </div>
        </div>
        <!-- /Page Header -->
        @if ($errors->any())
        <div class="col-md-3">
            <div class="alert alert-danger alert-dismissible fade show" role="alert">
                @foreach ($errors->all() as $error)
                <strong>Peringatan !</strong> 
                <li>{{$error}}</li>
                @endforeach
                <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
            </div>
        </div>
        @endif
        <div class="row">
            <div class="col-md-6">
                <div class="card">
                    <div class="card-header">
                        <h5 class="card-title">FORM EDIT PRODUK</h5>
                    </div>
                    <div class="card-body">
                        <form action="/edit-produk/{{$listproduk->id}}" method="POST" enctype="multipart/form-data">
                            @csrf
                            <div class="col-lg-12">
                                <div class="form-group">
                                    <label>Kode Produk</label>
                                    <input type="text" class="form-control is-valid" name="kodeproduk" value="{{$listproduk->kodeproduk}}" readonly>
                                </div>
                            </div>
                            <div class="row">
                                <div class="col-lg-6">
                                    <div class="form-group">
                                        <label>Nama Produk</label>
                                        <input type="text" name="namaproduk" value="{{$listproduk->namaproduk}}" required>
                                    </div>
                                </div>
                                <div class="col-lg-6">
                                    <div class="form-group">
                                        <label>Harga Produk</label>
                                        <input type="text" class="form-control" value="{{$listproduk->hargaproduk}}" name="hargaproduk" required>
                                    </div>
                                </div>
                            </div>
                            <div class="row">
                                <div class="col-lg-6">
                                    <div class="form-group">
                                        <label>Jenis Produk</label>
                                        <select class="select" name="jenisproduk" required>
                                            @foreach ($jenisproduk as $itemjenis)
                                            <option value="{{$itemjenis->id}}" @if ($listproduk->jenisproduk == $itemjenis->id) selected="selected" @endif>{{$itemjenis->jenis}}</option>
                                            @endforeach
                                        </select>
                                    </div>
                                </div>
                                <div class="col-lg-6">
                                    <div class="form-group">
                                        <label>Berat Produk</label>
                                        <input type="text" name="beratproduk" value="{{$listproduk->beratproduk}}" required>
                                    </div>
                                </div>
                            </div>
                            <div class="row">
                                <div class="col-lg-6">
                                    <div class="form-group">
                                        <label>Karat Produk</label>
                                        <input type="text" name="karatproduk" value="{{$listproduk->karatproduk}}" required>
                                    </div>
                                </div>
                                <div class="col-lg-6">
                                    <div class="form-group">
                                        <label>Status</label>
                                        <select class="select" name="status" required>
                                            <option value="1" @if ($listproduk->status == "1") selected="selected" @endif> AKTIF</option>
                                            <option value="2" @if ($listproduk->status == "2") selected="selected" @endif> TIDAK AKTIF</option>
                                        </select>
                                    </div>
                                </div>
                            </div>
                            <div class="col-lg-12">
                                <div class="form-group">
                                    <label>Keterangan</label>
                                    <textarea class="form-control" name="keteranganproduk" required>{{$listproduk->keteranganproduk}}</textarea>
                                </div>
                            </div>
                            <div class="col-lg-12">
                                <div class="form-group">
                                    <label>	Product Image</label>
                                    <div class="custom-file-container" data-upload-id="myFirstImage">
										<label>Foto Produk(PNG/JPG) <a href="javascript:void(0)" class="custom-file-container__image-clear" title="Clear Image">x</a></label>
										<label class="custom-file-container__custom-file" >
											<input type="file" class="custom-file-container__custom-file__custom-file-input" name="fotoproduk" accept="image/*">
											<input type="hidden" name="MAX_FILE_SIZE" value="10485760" />
											<span class="custom-file-container__custom-file__custom-file-control"></span>
										</label>
										<div class="custom-file-container__image-preview"></div>
									</div>
                                </div>
                            </div>
                            <div class="col-lg-12">
                                <div class="product-list">
                                    <ul class="row">
                                        <li>
                                            <div class="productviews">
                                                <div class="productviewsimg">
                                                    <img src="{{asset('storage/fotoproduk/'.$listproduk->fotoproduk)}}" alt="product">
                                                </div>
                                                <div class="productviewscontent">
                                                    <div class="productviewsname">
                                                        <h2>{{$listproduk->namaproduk}}</h2>
                                                    </div>
                                                    <a href="javascript:void(0);" class="hideset">x</a>
                                                </div>
                                            </div>
                                        </li>
                                    </ul>
                                </div>
                            </div>
                            <div class="text-end">
                                <button type="submit" class="btn btn-primary">Submit</button>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>

@endsection