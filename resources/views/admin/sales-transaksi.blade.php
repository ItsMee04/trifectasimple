@extends('admin.components.index')

@section('title', 'Produk')

@section('content')
    <div class="page-wrapper cardhead">
        <div class="content">

            <!-- Page Header -->
            <div class="page-header">
                <div class="row">
                    <div class="col">
                        <h3 class="page-title">SALES TRANSAKSI</h3>
                        <ul class="breadcrumb">
                            <li class="breadcrumb-item"><a href="index.html">Transaksi</a></li>
                            <li class="breadcrumb-item active">Sales Transaksi</li>
                        </ul>
                    </div>
                </div>
            </div>

            <!-- /product list -->
            <div class="card">
                <div class="card-body">
                    <div class="table-top">
                        <div class="search-set">
                            <div class="search-input">
                                <a class="btn btn-searchset"><img src="assets/img/icons/search-white.svg"
                                        alt="img"></a>
                            </div>
                        </div>
                        <div class="wordset">
                            <ul>
                                <li>
                                    <a data-bs-toggle="tooltip" data-bs-placement="top" title="pdf"><img
                                            src="assets/img/icons/pdf.svg" alt="img"></a>
                                </li>
                                <li>
                                    <a data-bs-toggle="tooltip" data-bs-placement="top" title="excel"><img
                                            src="assets/img/icons/excel.svg" alt="img"></a>
                                </li>
                                <li>
                                    <a data-bs-toggle="tooltip" data-bs-placement="top" title="print"><img
                                            src="assets/img/icons/printer.svg" alt="img"></a>
                                </li>
                            </ul>
                        </div>
                    </div>

                    <!-- /Filter -->
                    <div class="table-responsive">
                        <table class="table  datanew">
                            <thead>
                                <tr>
                                    <th>ID Transaksi</th>
                                    <th>Tanggal</th>
                                    <th>Konsumen</th>
                                    <th>Payment</th>
                                    <th>Total</th>
                                    <th>Sales</th>
                                    <th class="text-center">Action</th>
                                </tr>
                            </thead>
                            <tbody>
                                <tr>
                                    <td>walk-in-customer</td>
                                    <td>19 Nov 2022</td>
                                    <td>SL0101</td>
                                    <td><span class="badges bg-lightgreen">Paid</span></td>
                                    <td>0.00</td>
                                    <td>Admin</td>
                                    <td class="text-center">
                                        <a class="action-set" href="javascript:void(0);" data-bs-toggle="dropdown"
                                            aria-expanded="true">
                                            <i class="fa fa-ellipsis-v" aria-hidden="true"></i>
                                        </a>
                                        <ul class="dropdown-menu">
                                            <li>
                                                <a href="sales-details.html" class="dropdown-item"><img
                                                        src="assets/img/icons/eye1.svg" class="me-2" alt="img">Sale
                                                    Detail</a>
                                            </li>
                                            <li>
                                                <a href="edit-sales.html" class="dropdown-item"><img
                                                        src="assets/img/icons/edit.svg" class="me-2" alt="img">Edit
                                                    Sale</a>
                                            </li>
                                            <li>
                                                <a href="javascript:void(0);" class="dropdown-item" data-bs-toggle="modal"
                                                    data-bs-target="#showpayment"><img
                                                        src="assets/img/icons/dollar-square.svg" class="me-2"
                                                        alt="img">Show Payments</a>
                                            </li>
                                            <li>
                                                <a href="javascript:void(0);" class="dropdown-item" data-bs-toggle="modal"
                                                    data-bs-target="#createpayment"><img
                                                        src="assets/img/icons/plus-circle.svg" class="me-2"
                                                        alt="img">Create Payment</a>
                                            </li>
                                            <li>
                                                <a href="javascript:void(0);" class="dropdown-item"><img
                                                        src="assets/img/icons/download.svg" class="me-2"
                                                        alt="img">Download pdf</a>
                                            </li>
                                            <li>
                                                <a href="javascript:void(0);" class="dropdown-item confirm-text"><img
                                                        src="assets/img/icons/delete1.svg" class="me-2"
                                                        alt="img">Delete Sale</a>
                                            </li>
                                        </ul>
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
    <!-- /Main Wrapper -->



@endsection
