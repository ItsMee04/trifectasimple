@extends('admin.components.index')

@section('title','Edit Kontak')

@section('content')
<div class="page-wrapper cardhead">
    <div class="content container-fluid">

        <!-- Page Header -->
		<div class="page-header">
            <div class="row">
                <div class="col">
                    <h3 class="page-title">KONTAK</h3>
                    <ul class="breadcrumb">
                        <li class="breadcrumb-item"><a href="index.html">Refrensi</a></li>
                        <li class="breadcrumb-item active">Kontak</li>
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
                        <h5 class="card-title">FORM EDIT KONTAK</h5>
                    </div>
                    <div class="card-body">
                        <form action="/edit-kontak/{{$listkontak->id}}" method="POST">
                            @csrf
                            <div class="form-group">
                                <label>Jenis Identitas</label>
                                <input type="text" class="form-control" value="{{$listkontak->jeniskontak}}" name="jeniskontak" required>
                            </div>
                            <div class="form-group">
                                <label>Status</label>
                                <select class="select" name="status" required>
                                    <option value="1" @if ($listkontak->status == "1") selected="selected" @endif> AKTIF</option>
                                    <option value="2" @if ($listkontak->status == "2") selected="selected" @endif> TIDAK AKTIF</option>
                                </select>
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