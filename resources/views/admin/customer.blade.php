@extends('admin.components.index')

@section('title', 'Customer')

@section('content')
    <div class="page-wrapper cardhead">
        <div class="content">

            <!-- Page Header -->
            <div class="page-header">
                <div class="row">
                    <div class="col">
                        <h3 class="page-title">Customer</h3>
                        <ul class="breadcrumb">
                            <li class="breadcrumb-item"><a href="#">Master Data</a></li>
                            <li class="breadcrumb-item active">Customer</li>
                        </ul>
                    </div>
                </div>
                <div class="page-btn">
                    <a href="#" data-bs-toggle="modal" data-bs-target="#addCustomer" class="btn btn-added"><img
                            src="assets/img/icons/plus.svg" alt="img" class="me-1">Tambah Customer</a>
                </div>
            </div>
            <!-- /Page Header -->
            @if ($errors->any())
                <div class="col-md-3">
                    <div class="alert alert-danger alert-dismissible fade show" role="alert">
                        @foreach ($errors->all() as $error)
                            <strong>Peringatan !</strong>
                            <li>{{ $error }}</li>
                        @endforeach
                        <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
                    </div>
                </div>
            @endif
            <!-- /product list -->
            <div class="card">
                <div class="card-body">
                    <div class="table-top">
                        <div class="search-set">
                            <div class="search-input">
                                <a class="btn btn-searchset"><img src="{{ asset('assets') }}/img/icons/search-white.svg"
                                        alt="img"></a>
                            </div>
                        </div>
                        <div class="wordset">
                            <ul>
                                <li>
                                    <a data-toggle="tooltip" data-placement="top" title="pdf"><img
                                            src="{{ asset('assets') }}/img/icons/pdf.svg" alt="img"></a>
                                </li>
                                <li>
                                    <a data-toggle="tooltip" data-placement="top" title="excel"><img
                                            src="{{ asset('assets') }}/img/icons/excel.svg" alt="img"></a>
                                </li>
                                <li>
                                    <a data-toggle="tooltip" data-placement="top" title="print"><img
                                            src="{{ asset('assets') }}/img/icons/printer.svg" alt="img"></a>
                                </li>
                            </ul>
                        </div>
                    </div>
                    <!-- /Filter -->
                    <div class="table-responsive">
                        <table class="table  datanew">
                            <thead>
                                <tr>
                                    <th>No.</th>
                                    <th>Nama</th>
                                    <th>NIK</th>
                                    <th>Alamat </th>
                                    <th>Kontak </th>
                                    <th>Status</th>
                                    <th>Action</th>
                                </tr>
                            </thead>
                            <tbody>
                                @foreach ($listcustomer as $item)
                                    <tr>
                                        <td>{{ $loop->iteration }}.</td>
                                        <td>{{ $item->namacustomer }}</td>
                                        <td>{{ $item->nikcustomer }}</td>
                                        <td>{{ $item->alamatcustomer }}</td>
                                        <td>{{ $item->kontakcustomer }}</td>
                                        <td>
                                            @if ($item->status == 1)
                                                <span class="badges bg-lightgreen">AKTIF</span>
                                            @else
                                                <span class="badges bg-lightred">TIDAK AKTIF</span>
                                            @endif
                                        </td>
                                        <td>
                                            <a class="me-3" href="#">
                                                <img src="{{ asset('assets') }}/img/icons/edit.svg" alt="img"
                                                    data-bs-toggle="modal"
                                                    data-bs-target="#editCustomer{{ $item->id }}" data-toggle="tooltip"
                                                    data-placement="top" title="EDIT DATA">
                                            </a>
                                            <a class="confirm-text" href="javascript:void(0);"
                                                onclick="confirm_modal('delete-customer/{{ $item->id }}');">
                                                <img src="{{ asset('assets') }}/img/icons/delete.svg" alt="img"
                                                    data-toggle="tooltip" data-placement="top" title="DELETE DATA">
                                            </a>
                                        </td>
                                    </tr>
                                    <!-- MODAL ADD USERS -->
                                    @include('admin.modaledit.edit-customer')
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
