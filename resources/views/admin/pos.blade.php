@extends('admin.components.index')

@section('title', 'Produk')

@section('content')
    <div class="page-wrapper cardhead">
        <div class="content">
            <div class="row">
                <div class="col-lg-12 col-sm-12 ">
                    <div class="order-list">
                        <div class="orderid">
                            <h4>Order List</h4>
                            <h5>Transaction id : #65565</h5>
                        </div>
                        <div class="actionproducts">
                            <ul>
                                <li>
                                    <a href="javascript:void(0);" class="deletebg confirm-text"><img
                                            src="assets/img/icons/delete-2.svg" alt="img"></a>
                                </li>
                                <li>
                                    <a href="javascript:void(0);" data-bs-toggle="dropdown" aria-expanded="false"
                                        class="dropset">
                                        <img src="assets/img/icons/ellipise1.svg" alt="img">
                                    </a>
                                    <ul class="dropdown-menu" aria-labelledby="dropdownMenuButton"
                                        data-popper-placement="bottom-end">
                                        <li>
                                            <a href="#" class="dropdown-item">Action</a>
                                        </li>
                                        <li>
                                            <a href="#" class="dropdown-item">Another Action</a>
                                        </li>
                                        <li>
                                            <a href="#" class="dropdown-item">Something Elses</a>
                                        </li>
                                    </ul>
                                </li>
                            </ul>
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
                                                <option>Walk-in Customer</option>
                                                <option>Chris Moris</option>
                                            </select>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-lg-12">
                                    <div class="select-split">
                                        <div class="select-group w-100">
                                            <select class="select">
                                                <option>Product </option>
                                                <option>Barcode</option>
                                            </select>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-12">
                                    <div class="text-end">
                                        <a class="btn btn-scanner-set" data-bs-toggle="modal"
                                            data-bs-target="#scanbarcode"><img src="assets/img/icons/scanner1.svg"
                                                alt="img" class="me-2">Scan
                                            bardcode</a>
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
                                                <img src="assets/img/product/product30.jpg" alt="img">
                                            </div>
                                            <div class="productcontet">
                                                <h4>Pineapple
                                                    <a href="javascript:void(0);" class="ms-2" data-bs-toggle="modal"
                                                        data-bs-target="#edit"><img src="assets/img/icons/edit-5.svg"
                                                            alt="img"></a>
                                                </h4>
                                                <div class="productlinkset">
                                                    <h5>PT001</h5>
                                                </div>
                                                <div class="increment-decrement">
                                                    <div class="input-groups">
                                                        <input type="button" value="-"
                                                            class="button-minus dec button">
                                                        <input type="text" name="child" value="0"
                                                            class="quantity-field">
                                                        <input type="button" value="+"
                                                            class="button-plus inc button ">
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </li>
                                    <li>3000.00 </li>
                                    <li><a class="confirm-text" href="javascript:void(0);"><img
                                                src="assets/img/icons/delete-2.svg" alt="img"></a></li>
                                </ul>
                                <ul class="product-lists">
                                    <li>
                                        <div class="productimg">
                                            <div class="productimgs">
                                                <img src="assets/img/product/product34.jpg" alt="img">
                                            </div>
                                            <div class="productcontet">
                                                <h4>Green Nike
                                                    <a href="javascript:void(0);" class="ms-2" data-bs-toggle="modal"
                                                        data-bs-target="#edit"><img src="assets/img/icons/edit-5.svg"
                                                            alt="img"></a>
                                                </h4>
                                                <div class="productlinkset">
                                                    <h5>PT001</h5>
                                                </div>
                                                <div class="increment-decrement">
                                                    <div class="input-groups">
                                                        <input type="button" value="-"
                                                            class="button-minus dec button">
                                                        <input type="text" name="child" value="0"
                                                            class="quantity-field">
                                                        <input type="button" value="+"
                                                            class="button-plus inc button ">
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </li>
                                    <li>3000.00 </li>
                                    <li><a class="confirm-text" href="javascript:void(0);"><img
                                                src="assets/img/icons/delete-2.svg" alt="img"></a></li>
                                </ul>
                                <ul class="product-lists">
                                    <li>
                                        <div class="productimg">
                                            <div class="productimgs">
                                                <img src="assets/img/product/product35.jpg" alt="img">
                                            </div>
                                            <div class="productcontet">
                                                <h4>Banana
                                                    <a href="javascript:void(0);" class="ms-2" data-bs-toggle="modal"
                                                        data-bs-target="#edit"><img src="assets/img/icons/edit-5.svg"
                                                            alt="img"></a>
                                                </h4>
                                                <div class="productlinkset">
                                                    <h5>PT001</h5>
                                                </div>
                                                <div class="increment-decrement">
                                                    <div class="input-groups">
                                                        <input type="button" value="-"
                                                            class="button-minus dec button">
                                                        <input type="text" name="child" value="0"
                                                            class="quantity-field">
                                                        <input type="button" value="+"
                                                            class="button-plus inc button ">
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </li>
                                    <li>3000.00 </li>
                                    <li><a class="confirm-text" href="javascript:void(0);"><img
                                                src="assets/img/icons/delete-2.svg" alt="img"></a></li>
                                </ul>
                                <ul class="product-lists">
                                    <li>
                                        <div class="productimg">
                                            <div class="productimgs">
                                                <img src="assets/img/product/product31.jpg" alt="img">
                                            </div>
                                            <div class="productcontet">
                                                <h4>Strawberry
                                                    <a href="javascript:void(0);" class="ms-2" data-bs-toggle="modal"
                                                        data-bs-target="#edit"><img src="assets/img/icons/edit-5.svg"
                                                            alt="img"></a>
                                                </h4>
                                                <div class="productlinkset">
                                                    <h5>PT001</h5>
                                                </div>
                                                <div class="increment-decrement">
                                                    <div class="input-groups">
                                                        <input type="button" value="-"
                                                            class="button-minus dec button">
                                                        <input type="text" name="child" value="0"
                                                            class="quantity-field">
                                                        <input type="button" value="+"
                                                            class="button-plus inc button ">
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </li>
                                    <li>3000.00 </li>
                                    <li><a class="confirm-text" href="javascript:void(0);"><img
                                                src="assets/img/icons/delete-2.svg" alt="img"></a></li>
                                </ul>
                            </div>
                        </div>
                        <div class="split-card">
                        </div>
                        <div class="card-body pt-0 pb-2">
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
                            <div class="setvaluecash">
                                <ul>
                                    <li>
                                        <a href="javascript:void(0);" class="paymentmethod">
                                            <img src="assets/img/icons/cash.svg" alt="img" class="me-2">
                                            Cash
                                        </a>
                                    </li>
                                    <li>
                                        <a href="javascript:void(0);" class="paymentmethod">
                                            <img src="assets/img/icons/debitcard.svg" alt="img" class="me-2">
                                            Debit
                                        </a>
                                    </li>
                                    <li>
                                        <a href="javascript:void(0);" class="paymentmethod">
                                            <img src="assets/img/icons/scan.svg" alt="img" class="me-2">
                                            Scan
                                        </a>
                                    </li>
                                </ul>
                            </div>
                            <div class="btn-totallabel">
                                <h5>Checkout</h5>
                                <h6>60.00$</h6>
                            </div>
                            <div class="btn-pos">
                                <ul>
                                    <li>
                                        <a class="btn"><img src="assets/img/icons/pause1.svg" alt="img"
                                                class="me-1">Hold</a>
                                    </li>
                                    <li>
                                        <a class="btn"><img src="assets/img/icons/edit-6.svg" alt="img"
                                                class="me-1">Quotation</a>
                                    </li>
                                    <li>
                                        <a class="btn"><img src="assets/img/icons/trash12.svg" alt="img"
                                                class="me-1">Void</a>
                                    </li>
                                    <li>
                                        <a class="btn"><img src="assets/img/icons/wallet1.svg" alt="img"
                                                class="me-1">Payment</a>
                                    </li>
                                    <li>
                                        <a class="btn" data-bs-toggle="modal" data-bs-target="#recents"><img
                                                src="assets/img/icons/transcation.svg" alt="img" class="me-1">
                                            Transaction</a>
                                    </li>
                                </ul>
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
                    <h5 class="modal-title">Create</h5>
                    <button type="button" class="close" data-bs-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">×</span>
                    </button>
                </div>
                <div class="modal-body">
                    <div class="row">
                        <div class="col-lg-6 col-sm-12 col-12">
                            <div class="form-group">
                                <label>Customer Name</label>
                                <input type="text">
                            </div>
                        </div>
                        <div class="col-lg-6 col-sm-12 col-12">
                            <div class="form-group">
                                <label>Email</label>
                                <input type="text">
                            </div>
                        </div>
                        <div class="col-lg-6 col-sm-12 col-12">
                            <div class="form-group">
                                <label>Phone</label>
                                <input type="text">
                            </div>
                        </div>
                        <div class="col-lg-6 col-sm-12 col-12">
                            <div class="form-group">
                                <label>Country</label>
                                <input type="text">
                            </div>
                        </div>
                        <div class="col-lg-6 col-sm-12 col-12">
                            <div class="form-group">
                                <label>City</label>
                                <input type="text">
                            </div>
                        </div>
                        <div class="col-lg-6 col-sm-12 col-12">
                            <div class="form-group">
                                <label>Address</label>
                                <input type="text">
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-12">
                        <a class="btn btn-submit me-2">Submit</a>
                        <a class="btn btn-cancel" data-bs-dismiss="modal">Cancel</a>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <div class="modal fade" id="scanbarcode" tabindex="-1" aria-labelledby="create" aria-hidden="true">
        <div class="modal-dialog modal-lg modal-dialog-centered" role="document">
            <div class="modal-content">
                <!-- /product list -->
                <section class="comp-section comp-cards">
                    <div class="row">
                        <div class="col-12 d-flex">
                            <div class="card flex-fill bg-white">
                                <div id="reader"></div>
                            </div>
                        </div>
                    </div>
                </section>
            </div>
        </div>
    </div>

@endsection
