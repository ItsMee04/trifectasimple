@extends('admin.components.index')

@section('title','Edit Karyawan')

@section('content')
<div class="page-wrapper cardhead">
    <div class="content container-fluid">

        <!-- Page Header -->
		<div class="page-header">
            <div class="row">
                <div class="col">
                    <h3 class="page-title">Karyawan</h3>
                    <ul class="breadcrumb">
                        <li class="breadcrumb-item"><a href="index.html">User Management</a></li>
                        <li class="breadcrumb-item active">Karyawan</li>
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
                        <h5 class="card-title">FORM EDIT KARYAWAN</h5>
                    </div>
                    <div class="card-body">
                        <form action="/edit-karyawan/{{$listkaryawan->id}}" method="POST" enctype="multipart/form-data">
                            @csrf
                            <div class="row">
                                <div class="col-lg-6">
                                    <div class="form-group">
                                        <label>Nama Karyawan</label>
                                        <input type="text" class="form-control" value="{{$listkaryawan->nama}}" name="namakaryawan" required>
                                    </div>
                                </div>
                                <div class="col-lg-6">
                                    <div class="form-group">
                                        <label>Kontak Karyawan</label>
                                        <input type="text" class="form-control" value="{{$listkaryawan->kontak}}" name="kontakkaryawan" required>
                                    </div>
                                </div>
                            </div>
                            <div class="row">
                                <div class="col-lg-6">
                                    <div class="form-group">
                                        <label>Profesi Karyawan</label>
                                        <select class="select" name="profesikaryawan" required>
                                            @foreach ($profesi as $itemjenisprofesi)
                                            <option value="{{$itemjenisprofesi->id}}" @if ($listkaryawan->profesi == $itemjenisprofesi->id) selected="selected" @endif>{{$itemjenisprofesi->jenisprofesi}}</option>
                                            @endforeach
                                        </select>
                                    </div>
                                </div>
                                <div class="col-lg-6">
                                    <div class="form-group">
                                        <label>Status</label>
                                        <select class="select" name="status" required>
                                            <option value="1" @if ($listkaryawan->status == "1") selected="selected" @endif> AKTIF</option>
                                            <option value="2" @if ($listkaryawan->status == "2") selected="selected" @endif> TIDAK AKTIF</option>
                                        </select>
                                    </div>
                                </div>
                            </div>
                            <div class="form-group">
                                <label>Alamat Karyawan</label>
                                <textarea class="form-control form-white" name="alamatkaryawan" required>{{$listkaryawan->alamat}}</textarea>
                            </div>
                            <div class="col-lg-12">
                                <div class="form-group">
                                    <label>	TTD Karyawan</label>
                                    <div class="custom-file-container" data-upload-id="myFirstImage">
                                        <label>Foto TTD(PNG/JPG) <a href="javascript:void(0)" class="custom-file-container__image-clear" title="Clear Image">x</a></label>
                                        <label class="custom-file-container__custom-file" >
                                            <input type="file" class="custom-file-container__custom-file__custom-file-input" name="ttdkaryawan" accept="image/*">
                                            <input type="hidden" name="MAX_FILE_SIZE" value="10485760" />
                                            <span class="custom-file-container__custom-file__custom-file-control"></span>
                                        </label>
                                        <div class="custom-file-container__image-preview"></div>
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
            <div class="col-lg-3 col-sm-6 col-12">
                <div class="form-group uploadedimage">
                    <h3 class="page-title">TTD Karyawan</h3>
                    <div class="image-upload image-upload-new">
                        <div class="image-uploads">
                            <img src="{{asset('storage/ttdkaryawan/'.$listkaryawan->ttd)}}" alt="product">
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection