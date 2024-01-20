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
                                                <h5>{{ $itemanting->namaproduk }}</h5>
                                                <h4>{{ $itemanting->keteranganproduk }}</h4>
                                                <h6>{{ 'Rp' . ' ' . number_format($itemanting->hargaproduk) }}</h6>
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
                                                <h5>{{ $itemgelang->namaproduk }}</h5>
                                                <h4>{{ $itemgelang->keteranganproduk }}</h4>
                                                <h6>{{ 'Rp' . ' ' . number_format($itemgelang->hargaproduk) }}</h6>
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
                                                <h5>{{ $itemkalung->namaproduk }}</h5>
                                                <h4>{{ $itemkalung->keteranganproduk }}</h4>
                                                <h6>{{ 'Rp' . ' ' . number_format($itemkalung->hargaproduk) }}</h6>
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
                                            <select class="select" name="namacustomer">
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
                                <h4>Total items : {{$countcart}}</h4>
                                <a href="/delete-all-cart">Clear all</a>
                            </div>
                            <div class="product-table">
                                @foreach ($listcart as $item)
                                <ul class="product-lists">
                                    <li>
                                        <div class="productimg">

                                            <div class="productimgs">
                                                <img src="{{ asset('storage/fotoproduk/' . $item->fotoproduk) }}">
                                            </div>
                                            <div class="productcontet">
                                                <h4>{{$item->namaproduk}}
                                                    <a href="javascript:void(0);" class="ms-2" data-bs-toggle="modal"
                                                        data-bs-target="#edit"><img
                                                            src="{{ asset('assets') }}/img/icons/edit-5.svg"
                                                            alt="img"></a>
                                                </h4>
                                                <div class="productlinkset">
                                                    <h5>{{$item->kodeproduk}}</h5>
                                                </div>
                                            </div>

                                        </div>
                                    </li>
                                    <li>{{"Rp."." ".number_format($item->hargaproduk)}}</li>
                                    <li>
                                        <a class="confirm-text" href="javascript:void(0);"
                                        onclick="confirm_modal('delete-cart/{{ $item->id }}');">
                                        <img src="{{ asset('assets') }}/img/icons/delete.svg" alt="img"
                                            data-toggle="tooltip" data-placement="top" title="DELETE DATA">
                                    </a>
                                    </li>
                                </ul>
                                @endforeach
                            </div>
                        </div>
                        <div class="card-body pt-0 pb-0">
                            <div class="setvalue">
                                <ul>
                                    <li>
                                        <h5>Subtotal </h5>
                                        <h6>{{"Rp."." ".number_format($subtotal)}}</h6>
                                    </li>
                                    <li class="total-value">
                                        <h5>Total </h5>
                                        <h6>{{"Rp."." ".number_format($subtotal)}}</h6>
                                    </li>
                                </ul>
                            </div>
                            <div class="btn-totallabel">
                                <a href="">
                                    <button class="btn btn-rounded text-white">
                                        <h5>Checkout</h5>
                                    </button>
                                </a>
                                <h6>{{"Rp."." ".number_format($subtotal)}}</h6>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    @include('admin.modalpos.modal-pos')

    <!-- Modal Popup untuk delete-->
    <div class="modal custom-modal fade" id="modal_delete">
        <div class="modal-dialog modal-sm modal-dialog-centered">
            <div class="modal-content">
                <div class="modal-header">
                    <h4 class="modal-title text-center"><b>APAKAH ANDA YAKIN AKAN MENGHAPUS DATA
                            INI ?</b></h4>
                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-hidden="true"><span
                            aria-hidden="true">×</span></button>
                </div>
                <div class="modal-body">
                    <form action="identitas" method="POST">
                        <div class="submit-section">
                            <a id="delete_link" class="btn btn-danger save-category submit-btn"
                                data-dismiss="modal">Delete</a>
                        </div>
                    </form>
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
