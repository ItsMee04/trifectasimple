@extends('admin.components.index')

@section('title','Identitas')

@section('content')
<div class="page-wrapper cardhead">
    <div class="content container-fluid">

        <!-- Page Header -->
		<div class="page-header">
            <div class="row">
                <div class="col">
                    <h3 class="page-title">IDENTITAS</h3>
                    <ul class="breadcrumb">
                        <li class="breadcrumb-item"><a href="index.html">Refrensi</a></li>
                        <li class="breadcrumb-item active">Identitas</li>
                    </ul>
                </div>
            </div>
            <div class="page-btn">
                <a href="#" data-bs-toggle="modal" data-bs-target="#addIdentitas" class="btn btn-added"><img src="assets/img/icons/plus.svg" alt="img" class="me-1">Tambah Identitas</a>
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
                <div class="table-responsive">
                    <table class="table  datanew">
                        <thead>
                            <tr>
                                <th>No.</th>
                                <th>Jenis Identitas</th>
                                <th>Status </th>
                                <th>Action</th>
                            </tr>
                        </thead>
                        <tbody>
                            @foreach ($listidentitas as $item)
                            <tr>
                                <td>{{$loop->iteration}}</td>
                                <td>{{$item->jenisidentitas}}</td>
                                <td>
                                    @if ($item->status == 1)
                                        <span class="badges bg-lightgreen">AKTIF</span>
                                    @else
                                        <span class="badges bg-lightred">TIDAK AKTIF</span>
                                    @endif
                                </td>
                                <td>
                                    <a class="me-3" href="/edit-identitas/{{$item->id}}">
                                        <img src="{{asset('assets')}}/img/icons/edit.svg" alt="img" data-bs-toggle="tooltip" data-bs-placement="top" title="EDIT DATA">
                                    </a>
                                    <a class="confirm-text" href="javascript:void(0);" onclick="confirm_modal('delete-identitas/{{$item->id}}');">
                                        <img src="{{asset('assets')}}/img/icons/delete.svg" alt="img" data-bs-toggle="tooltip" data-bs-placement="top" title="DELETE DATA">
                                    </a>
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
<div class="modal custom-modal fade" id="addIdentitas">
    <div class="modal-dialog modal-lg modal-dialog-centered">
        <div class="modal-content">
            <div class="modal-header">
                <h4 class="modal-title">FORM INPUT IDENTITAS</h4>
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-hidden="true"><span aria-hidden="true">×</span></button>
            </div>
            <div class="modal-body">
                <form action="identitas" method="POST">
                    @csrf
                    <div class="form-group">
                        <label>Jenis Identitas</label>
                        <input type="text" class="form-control form-white" placeholder="Masukan Jenis Identitas" type="text" name="jenisidentitas" required>
                    </div>
                    <div class="form-group">
                        <label>Status</label>
                        <select class="select form-control form-white" name="status" required>
                            <option value="1"> AKTIF</option>
                            <option value="2"> TIDAK AKTIF</option>
                        </select>
                    </div>
                    <div class="submit-section">
                        <button type="submit" class="btn btn-primary save-category submit-btn" data-dismiss="modal">Save</button>
                    </div>
                </form>
            </div>
        </div>
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