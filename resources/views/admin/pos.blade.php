@extends('admin.components.index')

@section('title', 'Produk')

@section('content')
    <div class="page-wrapper cardhead">

        <div class="content">
            <div class="row">
                <div class="col-lg-8 col-sm-12 tabs_wrapper">
                    <div class="page-header ">
                        <div class="page-title">
                            <h4>Categories</h4>
                            <h6>Manage your purchases</h6>
                        </div>
                    </div>
                    <ul class=" tabs owl-carousel owl-theme owl-product  border-0 ">
                        <li id="cincin">
                            <div class="product-details ">
                                <img src="{{ asset('assets') }}/img/product/cincin.png" alt="img">
                                <h6>Cincin</h6>
                            </div>
                        </li>
                        <li id="anting">
                            <div class="product-details ">
                                <img src="{{ asset('assets') }}/img/product/anting.png" alt="img">
                                <h6>Anting</h6>
                            </div>
                        </li>
                        <li id="gelang">
                            <div class="product-details">
                                <img src="{{ asset('assets') }}/img/product/gelang.png" alt="img">
                                <h6>Gelang</h6>
                            </div>
                        </li>
                        <li id="kalung">
                            <a class="product-details">
                                <img src="{{ asset('assets') }}/img/product/kalung.png" alt="img">
                                <h6>Kalung</h6>
                            </a>
                        </li>
                    </ul>
                    <div class="tabs_container">
                        <div class="tab_content active" data-tab="cincin">
                            <div class="row ">
                                @foreach ($listcincin as $itemcincin)
                                    <div class="col-lg-3 col-sm-6 d-flex ">
                                        <div class="productset flex-fill">
                                            <div class="productsetimg">
                                                <img src="{{ asset('storage/fotoproduk/' . $itemcincin->fotoproduk) }}">
                                                <div class="check-product">
                                                    <i class="fa fa-check"></i>
                                                </div>
                                            </div>
                                            <div class="productsetcontent">
                                                <h5>{{ $itemcincin->namaproduk }}</h5>
                                                <h4>{{ $itemcincin->keteranganproduk }}</h4>
                                                <h6>{{ 'Rp' . ' ' . number_format($itemcincin->hargaproduk) }}</h6>
                                            </div>
                                        </div>
                                    </div>
                                @endforeach
                            </div>
                        </div>
                        <div class="tab_content" data-tab="anting">
                            <div class="row ">
                                @foreach ($listanting as $itemanting)
                                    <div class="col-lg-3 col-sm-6 d-flex ">
                                        <div class="productset flex-fill">
                                            <div class="productsetimg">
                                                <img src="{{ asset('storage/fotoproduk/' . $itemanting->fotoproduk) }}">
                                                <h6>Qty: 5.00</h6>
                                                <div class="check-product">
                                                    <i class="fa fa-check"></i>
                                                </div>
                                            </div>
                                            <div class="productsetcontent">
                                                <h5>Headphones</h5>
                                                <h4>Earphones</h4>
                                                <h6>150.00</h6>
                                            </div>
                                        </div>
                                    </div>
                                @endforeach
                            </div>
                        </div>
                        <div class="tab_content" data-tab="gelang">
                            <div class="row">
                                @foreach ($listgelang as $itemgelang)
                                    <div class="col-lg-3 col-sm-6 d-flex ">
                                        <div class="productset flex-fill">
                                            <div class="productsetimg">
                                                <img src="{{ asset('storage/fotoproduk/' . $itemgelang->fotoproduk) }}">
                                                <h6>Qty: 1.00</h6>
                                                <div class="check-product">
                                                    <i class="fa fa-check"></i>
                                                </div>
                                            </div>
                                            <div class="productsetcontent">
                                                <h5>Accessories</h5>
                                                <h4>Sunglasses</h4>
                                                <h6>15.00</h6>
                                            </div>
                                        </div>
                                    </div>
                                @endforeach
                            </div>
                        </div>
                        <div class="tab_content" data-tab="kalung">
                            <div class="row">
                                @foreach ($listkalung as $itemkalung)
                                    <div class="col-lg-3 col-sm-6 d-flex ">
                                        <div class="productset flex-fill">
                                            <div class="productsetimg">
                                                <img src="{{ asset('storage/fotoproduk/' . $itemkalung->fotoproduk) }}">
                                                <h6>Qty: 1.00</h6>
                                                <div class="check-product">
                                                    <i class="fa fa-check"></i>
                                                </div>
                                            </div>
                                            <div class="productsetcontent">
                                                <h5>Shoes</h5>
                                                <h4>Red nike</h4>
                                                <h6>1500.00</h6>
                                            </div>
                                        </div>
                                    </div>
                                @endforeach
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-lg-4 col-sm-12 ">
                    <div class="order-list">
                        <div class="orderid">
                            <h4>Order List</h4>
                            <h5>Transaction id : #{{ 'T-' . $idTransaksi }}</h5>
                        </div>
                    </div>
                    <div class="card card-order">
                        <div class="card-body">
                            <div class="row">
                                <div class="col-12">
                                    <a href="javascript:void(0);" class="btn btn-adds" data-bs-toggle="modal"
                                        data-bs-target="#create"><i class="fa fa-plus me-2"></i>Add Customer</a>
                                </div>
                                <div class="col-lg-12">
                                    <div class="select-split ">
                                        <div class="select-group w-100">
                                            <select class="select">
                                                @foreach ($listcustomer as $itemcustomer)
                                                    <option value="{{ $itemcustomer->id }}">
                                                        {{ $itemcustomer->namacustomer }}</option>
                                                @endforeach
                                            </select>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-lg-12">
                                    <div class="select-split">
                                        <div class="select-group w-100">
                                            <input type="text" name="discount" placeholder="Discount %"
                                                class="form-control">
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="split-card">
                        </div>
                        <div class="card-body pt-0">
                            <div class="totalitem">
                                <h4>Total items : 4</h4>
                                <a href="javascript:void(0);">Clear all</a>
                            </div>
                            <div class="product-table">
                                <ul class="product-lists">
                                    <li>
                                        <div class="productimg">

                                            <div class="productimgs">
                                                <img src="{{ asset('assets') }}/img/product/product30.jpg" alt="img">
                                            </div>
                                            <div class="productcontet">
                                                <h4>Pineapple
                                                    <a href="javascript:void(0);" class="ms-2" data-bs-toggle="modal"
                                                        data-bs-target="#edit"><img
                                                            src="{{ asset('assets') }}/img/icons/edit-5.svg"
                                                            alt="img"></a>
                                                </h4>
                                                <div class="productlinkset">
                                                    <h5>PT001</h5>
                                                </div>
                                            </div>

                                        </div>
                                    </li>
                                    <li>3000.00 </li>
                                    <li><a class="confirm-text" href="javascript:void(0);"><img
                                                src="{{ asset('assets') }}/img/icons/delete-2.svg" alt="img"></a>
                                    </li>
                                </ul>
                            </div>
                        </div>
                        <div class="card-body pt-0 pb-0">
                            <div class="setvalue">
                                <ul>
                                    <li>
                                        <h5>Subtotal </h5>
                                        <h6>55.00$</h6>
                                    </li>
                                    <li>
                                        <h5>Tax </h5>
                                        <h6>5.00$</h6>
                                    </li>
                                    <li class="total-value">
                                        <h5>Total </h5>
                                        <h6>60.00$</h6>
                                    </li>
                                </ul>
                            </div>
                            <div class="btn-totallabel">
                                <a href="">
                                    <button class="btn btn-rounded text-white">
                                        <h5>Checkout</h5>
                                    </button>
                                </a>
                                <h6>60.00$</h6>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    @include('admin.modalpos.modal-pos')
@endsection
