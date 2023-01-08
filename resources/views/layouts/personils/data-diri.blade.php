@extends('layouts.app_admin.app')

@section('content')
<!-- ============================================================== -->
<!-- Start Page Content -->
<!-- ============================================================== -->
<!-- Row -->
<div class="row">
    <!-- Column -->
    <div class="col-lg-8 col-xlg-9 col-md-12">
        @if(Session::has('message'))
            <div class="alert alert-success alert-dismissible fade show" role="alert">
                {{session('message')}}
                <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
            </div>
        @endif
        <div class="card">
            <div class="card-body">
                <form method="POST" action="{{ route('personil.update', $personil->id) }}" enctype="multipart/form-data" class="form-horizontal form-material">
                    @csrf
                    @method('PATCH')
                    <div class="form-group mb-4">
                        <label class="col-md-12 p-0">NRP</label>
                        <div class="col-md-12 border-bottom p-0">
                            <input name="nrp" type="text" placeholder="NRP" readonly
                                class="form-control p-0 border-0" value="{{ old('nrp', $personil->nrp) }}"> 
                        </div>
                    </div>
                    <div class="form-group mb-4">
                        <label class="col-md-12 p-0">Nama</label>
                        <div class="col-md-12 border-bottom p-0">
                            <input name="nama" type="text" placeholder="Isi nama..."
                                class="form-control p-0 border-0" value="{{ old('nama', $personil->nama) }}"> 
                        </div>
                    </div>
                    <div class="form-group mb-4">
                        <label class="col-md-12 p-0">TTL</label>
                        <div class="col-md-12 border-bottom p-0">
                            <input name="ttl" type="text" placeholder="Isi TTL..."
                                class="form-control p-0 border-0" value="{{ old('ttl', $personil->ttl) }}">
                        </div>
                    </div>
                    <div class="form-group mb-4">
                        <label class="col-md-12 p-0">Pangkat Sekarang</label>
                        <div class="col-md-12 border-bottom p-0">
                            <input name="pangkat_sekarang" type="text" placeholder="Isi Pangkat..."
                                class="form-control p-0 border-0" value="{{ old('pangkat_sekarang', $personil->pangkat_sekarang) }}">
                        </div>
                    </div>
                    <div class="form-group mb-4">
                        <label class="col-md-12 p-0">Jenis Kelamin</label>
                        <div class="col-md-12 border-bottom p-0">
                            <input name="jenis_kelamin" type="text" placeholder="Isi Jenis kelamin..."
                                class="form-control p-0 border-0" value="{{ old('jenis_kelamin', $personil->jenis_kelamin) }}">
                        </div>
                    </div>
                    <div class="form-group mb-4">
                        <label class="col-md-12 p-0">Foto Diri</label>
                        <img src="{{ asset($personil->foto) }}" alt="{{$personil->nama}}" width="100">
                    </div>
                    <div class="form-group mb-4">
                        <label class="col-md-12 p-0">Foto</label>
                        <div class="col-md-12 border-bottom p-0">
                            <input name="foto" type="file"
                                class="form-control p-0 border-0">
                        </div>
                    </div>
                    <div class="form-group mb-4">
                        <div class="col-sm-12">
                            <button type="submit" class="btn btn-primary">
                                Update
                                <i class="fas fa-save"></i>
                            </button>
                        </div>
                    </div>
                </form>
            </div>
        </div>
    </div>
    <!-- Column -->
</div>
<!-- Row -->
<!-- ============================================================== -->
<!-- End PAge Content -->
<!-- ============================================================== -->
@endsection