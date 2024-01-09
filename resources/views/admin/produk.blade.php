@extends('admin.components.index')

@section('title','Produk')

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
        
        <div class="row">
            <div class="col-md-6">
                <div class="card">
                    <div class="card-header">
                        <h5 class="card-title">FORM INPUT KONTAK</h5>
                    </div>
                    <div class="card-body">
                        <form action="kontak" method="POST">
                            @csrf
                            <div class="col-lg-6">
                                <div class="form-group">
                                    <label>Product Name</label>
                                    <input type="text" >
                                </div>
                            </div>
                            <div class="col-lg-6">
                                <div class="form-group">
                                    <label>Category</label>
                                    <select class="select">
                                        <option>Choose Category</option>
                                        <option>Computers</option>
                                    </select>
                                </div>
                            </div>
                            <div class="col-lg-3 col-sm-6 col-12">
                                <div class="form-group">
                                    <label>Sub Category</label>
                                    <select class="select">
                                        <option>Choose Sub Category</option>
                                        <option>Fruits</option>
                                    </select>
                                </div>
                            </div>
                            <div class="col-lg-3 col-sm-6 col-12">
                                <div class="form-group">
                                    <label>Brand</label>
                                    <select class="select">
                                        <option>Choose Brand</option>
                                        <option>Brand</option>
                                    </select>
                                </div>
                            </div>
                            <div class="col-lg-3 col-sm-6 col-12">
                                <div class="form-group">
                                    <label>Unit</label>
                                    <select class="select">
                                        <option>Choose Unit</option>
                                        <option>Unit</option>
                                    </select>
                                </div>
                            </div>
                            <div class="col-lg-3 col-sm-6 col-12">
                                <div class="form-group">
                                    <label>SKU</label>
                                    <input type="text" >
                                </div>
                            </div>
                            <div class="col-lg-3 col-sm-6 col-12">
                                <div class="form-group">
                                    <label>Minimum Qty</label>
                                    <input type="text" >
                                </div>
                            </div>
                            <div class="col-lg-3 col-sm-6 col-12">
                                <div class="form-group">
                                    <label>Quantity</label>
                                    <input type="text" >
                                </div>
                            </div>
                            <div class="col-lg-12">
                                <div class="form-group">
                                    <label>Description</label>
                                    <textarea class="form-control"></textarea>
                                </div>
                            </div>
                            <div class="col-lg-3 col-sm-6 col-12">
                                <div class="form-group">
                                    <label>Tax</label>
                                    <select class="select">
                                        <option>Choose Tax</option>
                                        <option>2%</option>
                                    </select>
                                </div>
                            </div>
                            <div class="col-lg-3 col-sm-6 col-12">
                                <div class="form-group">
                                    <label>Discount Type</label>
                                    <select class="select">
                                        <option>Percentage</option>
                                        <option>10%</option>
                                        <option>20%</option>
                                    </select>
                                </div>
                            </div>
                            <div class="col-lg-3 col-sm-6 col-12">
                                <div class="form-group">
                                    <label>Price</label>
                                    <input type="text" >
                                </div>
                            </div>
                            <div class="col-lg-3 col-sm-6 col-12">
                                <div class="form-group">
                                    <label>	Status</label>
                                    <select class="select">
                                        <option>Closed</option>
                                        <option>Open</option>
                                    </select>
                                </div>
                            </div>
                            <div class="col-lg-12">
                                <div class="form-group">
                                    <label>	Product Image</label>
                                    <div class="image-upload">
                                        <input type="file">
                                        <div class="image-uploads">
                                            <img src="assets/img/icons/upload.svg" alt="img">
                                            <h4>Drag and drop a file to upload</h4>
                                        </div>
                                    </div>
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

        <!-- /product list -->
        <div class="card">
            <div class="card-body">
                <div class="table-top">
                    <div class="search-set">
                        <div class="search-input">
                            <a class="btn btn-searchset"><img src="{{asset('assets')}}/img/icons/search-white.svg" alt="img"></a>
                        </div>
                    </div>
                    <div class="wordset">
                        <ul>
                            <li>
                                <a data-bs-toggle="tooltip" data-bs-placement="top" title="pdf"><img src="{{asset('assets')}}/img/icons/pdf.svg" alt="img"></a>
                            </li>
                            <li>
                                <a data-bs-toggle="tooltip" data-bs-placement="top" title="excel"><img src="{{asset('assets')}}/img/icons/excel.svg" alt="img"></a>
                            </li>
                            <li>
                                <a data-bs-toggle="tooltip" data-bs-placement="top" title="print"><img src="{{asset('assets')}}/img/icons/printer.svg" alt="img"></a>
                            </li>
                        </ul>
                    </div>
                </div>
                <!-- /Filter -->
                <div class="table-responsive">
                    <table class="table  datanew">
                        <thead>
                            <tr>
                                <th>Product Name</th>
                                <th>SKU</th>
                                <th>Category </th>
                                <th>Brand</th>
                                <th>price</th>
                                <th>Unit</th>
                                <th>Qty</th>
                                <th>Created By</th>
                                <th>Action</th>
                            </tr>
                        </thead>
                        <tbody>
                            <tr>
                                <td class="productimgname">
                                    <a href="javascript:void(0);" class="product-img">
                                        <img src="{{asset('assets')}}/img/product/product1.jpg" alt="product">
                                    </a>
                                    <a href="javascript:void(0);">Macbook pro</a>
                                </td>
                                <td>PT001</td>
                                <td>Computers</td>
                                <td>N/D</td>
                                <td>1500.00</td>
                                <td>pc</td>
                                <td>100.00</td>
                                <td>Admin</td>
                                <td>
                                    <a class="me-3" href="product-details.html">
                                        <img src="{{asset('assets')}}/img/icons/eye.svg" alt="img">
                                    </a>
                                    <a class="me-3" href="editproduct.html">
                                        <img src="{{asset('assets')}}/img/icons/edit.svg" alt="img">
                                    </a>
                                    <a class="confirm-text" href="javascript:void(0);">
                                        <img src="{{asset('assets')}}/img/icons/delete.svg" alt="img">
                                    </a>
                                </td>
                            </tr>
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
        <!-- /product list -->
    </div>
</div>

<!-- Modal Popup untuk delete-->
<div class="modal fade" id="modal_delete" tabindex="-1" aria-hidden="true">
    <div class="modal-dialog modal-lg modal-dialog-centered">
        <div class="modal-content ">
            <div class="modal-header bg-danger">
                <h5 class="modal-title text-white" style="text-align: center"><b>APAKAH ANDA YAKIN AKAN MENGHAPUS DATA INI ?</b></h5>
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>

            <div class="modal-footer justify-content-center">
                <a href="#" class="btn btn-success" id="delete_link"><b>HAPUS</b></a>
                <button type="button" class="btn btn-warning" data-bs-dismiss="modal"><b>CLOSE</b></button>
            </div>
        </div>
    </div>
</div>

<!-- Javascript untuk popup modal Delete-->
<script type="text/javascript">
    function confirm_modal(delete_url) {
        $('#modal_delete').modal('show', {
            backdrop: 'static'
        });
        document.getElementById('delete_link').setAttribute('href', delete_url);
    }
</script>

@endsection