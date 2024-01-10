@extends('admin.components.index')

@section('title','Suplier')

@section('content')
<div class="page-wrapper cardhead">
    <div class="content">

        <!-- Page Header -->
		<div class="page-header">
            <div class="row">
                <div class="col">
                    <h3 class="page-title">Suplier</h3>
                    <ul class="breadcrumb">
                        <li class="breadcrumb-item"><a href="#">Master Data</a></li>
                        <li class="breadcrumb-item active">Suplier</li>
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
                        <h5 class="card-title">FORM INPUT Suplier</h5>
                    </div>
                    <div class="card-body">
                        <form action="/edit-suplier/{{$listsuplier->id}}" method="POST" enctype="multipart/form-data">
                            @csrf
                            <div class="row">
                                <div class="col-lg-6">
                                    <div class="form-group">
                                        <label>Nama Suplier</label>
                                        <input type="text" name="namasuplier" value="{{$listsuplier->namasuplier}}" required>
                                    </div>
                                </div>
                                <div class="col-lg-6">
                                    <div class="form-group">
                                        <label>Kontak Suplier</label>
                                        <input type="text" class="form-control" name="kontaksuplier" value="{{$listsuplier->kontaksuplier}}" required>
                                    </div>
                                </div>
                            </div>
                            <div class="col-lg-12">
                                <div class="form-group">
                                    <label>Alamat Suplier</label>
                                    <textarea class="form-control" name="alamatsuplier" required>{{$listsuplier->alamatsuplier}}</textarea>
                                </div>
                            </div>
                            <div class="col-lg-12">
                                <div class="form-group">
                                    <label>Status</label>
                                    <select class="select" name="status" required>
                                        <option value="1" @if ($listsuplier->status == "1") selected="selected" @endif> AKTIF</option>
                                        <option value="2" @if ($listsuplier->status == "2") selected="selected" @endif> TIDAK AKTIF</option>
                                    </select>
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