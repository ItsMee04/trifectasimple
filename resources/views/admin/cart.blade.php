@extends('admin.components.index')

@section('title', 'Customer')

@section('content')
    <div class="page-wrapper">
        <div class="content">
            <div class="page-header">
                <div class="page-title">
                    <h4>CART TRANSAKSI</h4>
                    <h6>Transaksi / Cart Transaksi</h6>
                </div>
            </div>


            <!-- /product list -->
            <div class="card">
                <div class="card-body">
                    <div class="table-top">
                        <div class="search-set">
                            <div class="search-input">
                                <a class="btn btn-searchset"><img src="assets/img/icons/search-white.svg" alt="img"></a>
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

                    <div class="table-responsive">
                        <table class="table  datanew">
                            <thead>
                                <tr>
                                    <th>No.</th>
                                    <th>ID Cart</th>
                                    <th>Produk</th>
                                    <th>Checkout Status</th>
                                    <th>Sales</th>
                                    <th class="text-center">Action</th>
                                </tr>
                            </thead>
                            <tbody>
                                @foreach ($listcart as $itemcart)
                                    <tr>
                                        <td>{{ $loop->iteration }}</td>
                                        <td>{{ $itemcart->idcart }}</td>
                                        <td>{{ $itemcart->namaproduk }}</td>
                                        <td>
                                            @if ($itemcart->status == 1)
                                                <span class="badges bg-lightred">Un Checkout</span>
                                            @else
                                                <span class="badges bg-lightgreen">Checkout</span>
                                            @endif
                                        </td>
                                        <td>{{ $itemcart->namasales }}</td>
                                        <td class="text-center">
                                            <a class="action-set" href="javascript:void(0);" data-bs-toggle="dropdown"
                                                aria-expanded="true">
                                                <i class="fa fa-ellipsis-v" aria-hidden="true"></i>
                                            </a>
                                            <ul class="dropdown-menu">
                                                <li>
                                                    <a href="sales-details.html" class="dropdown-item"><img
                                                            src="assets/img/icons/eye1.svg" class="me-2"
                                                            alt="img">Sale Detail</a>
                                                </li>
                                                <li>
                                                    <a href="edit-sales.html" class="dropdown-item"><img
                                                            src="assets/img/icons/edit.svg" class="me-2"
                                                            alt="img">Edit Sale</a>
                                                </li>
                                                <li>
                                                    <a href="javascript:void(0);" class="dropdown-item"
                                                        data-bs-toggle="modal" data-bs-target="#showpayment"><img
                                                            src="assets/img/icons/dollar-square.svg" class="me-2"
                                                            alt="img">Show Payments</a>
                                                </li>
                                                <li>
                                                    <a href="javascript:void(0);" class="dropdown-item"
                                                        data-bs-toggle="modal" data-bs-target="#createpayment"><img
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
                                @endforeach
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
            <!-- /product list -->
        </div>
    </div>


    <!-- MODAL -->
    <div class="modal custom-modal fade" id="addCustomer">
        <div class="modal-dialog modal-lg modal-dialog-centered">
            <div class="modal-content">
                <div class="modal-header">
                    <h4 class="modal-title">FORM INPUT CUSTOMER</h4>
                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-hidden="true"><span
                            aria-hidden="true">×</span></button>
                </div>
                <div class="modal-body">
                    <form action="customer" method="POST" enctype="multipart/form-data">
                        @csrf
                        <div class="row">
                            <div class="col-lg-6">
                                <div class="form-group">
                                    <label>Nama Customer</label>
                                    <input type="text" class="form-control form-white"
                                        placeholder="Masukan Nama Customer" type="text" name="namacustomer" required>
                                </div>
                            </div>
                            <div class="col-lg-6">
                                <div class="form-group">
                                    <label>Kontak Customer</label>
                                    <input type="text" class="form-control form-white"
                                        placeholder="Masukan Kontak Customer" name="kontakcustomer" required>
                                </div>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-lg-6">
                                <div class="form-group">
                                    <label>NIK Customer</label>
                                    <input type="text" class="form-control form-white"
                                        placeholder="Masukan NIK Customer" type="text" name="nikcustomer" required>
                                </div>
                            </div>
                            <div class="col-lg-6">
                                <div class="form-group">
                                    <label>Tanggal Lahir Customer</label>
                                    <input type="date" class="form-control form-white"
                                        placeholder="Masukan Kontak Karyawan" name="tanggalcustomer" required>
                                </div>
                            </div>
                        </div>
                        <div class="form-group">
                            <label>Status</label>
                            <select class="select form-control form-white" name="status" required>
                                <option value="1"> AKTIF</option>
                                <option value="2"> TIDAK AKTIF</option>
                            </select>
                        </div>
                        <div class="form-group">
                            <label>Alamat Customer</label>
                            <textarea class="form-control form-white" name="alamatcustomer" required></textarea>
                        </div>
                        <div class="submit-section">
                            <button type="submit" class="btn btn-primary save-category submit-btn"
                                data-dismiss="modal">Save</button>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>

    <!-- Modal Popup untuk delete-->
    <div class="modal custom-modal fade" id="modal_delete">
        <div class="modal-dialog modal-lg modal-dialog-centered">
            <div class="modal-content">
                <div class="modal-header">
                    <h4 class="modal-title" style="text-align: center"><b>APAKAH ANDA YAKIN AKAN MENGHAPUS DATA
                            INI ?</b></h4>
                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-hidden="true"><span
                            aria-hidden="true">×</span></button>
                </div>
                <div class="modal-body">
                    <div class="submit-section">
                        <a id="delete_link" class="btn btn-danger save-category submit-btn"
                            data-dismiss="modal">Delete</a>
                    </div>
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
