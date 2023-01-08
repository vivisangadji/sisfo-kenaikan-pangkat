@extends('layouts.app_admin.app')

@section('content')
<div class="row">
    <div class="col-sm-12">
        <!-- Button trigger modal tambah personil -->
        <button type="button" class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#exampleModal">
            Tambah Personil <i class="fas fa-plus"></i>
        </button>
        <div class="white-box">
            @if(Session::has('message'))
                <div class="alert alert-success alert-dismissible fade show" role="alert">
                    {{session('message')}}
                    <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
                </div>
            @endif
            <h3 class="box-title">Personil Table</h3>
            <div class="table-responsive">
                <table class="table text-nowrap">
                    <thead>
                        <tr>
                            <th class="border-top-0">#</th>
                            <th class="border-top-0">Nama</th>
                            <th class="border-top-0">NRP</th>
                            <th class="border-top-0">No HP</th>
                            <th class="border-top-0">Foto</th>
                            <th class="border-top-0">Pangkat Sekarang</th>
                            <th class="border-top-0">Action</th>
                        </tr>
                    </thead>
                    <tbody>
                        @foreach($personils as $key => $personil)
                        <tr>
                            <td>1</td>
                            <td>{{ $personil->nama }}</td>
                            <td>{{ $personil->nrp }}</td>
                            <td>{{ $personil->no_hp }}</td>
                            <td>
                                <img src="{{ asset($personil->foto) }}" alt="{{ $personil->nama }}" width="100">
                            </td>
                            <td>{{ $personil->pangkat_sekarang }}</td>
                            <td>
                                <form action="{{ route('personil.destroy', $personil->id) }}" method="POST">
                                    @csrf
                                    @method('DELETE')
                                    <button type="submit" class="btn btn-danger btn-circle btn-sm text-white" onclick="alert('Yakin ingin menghapus personil?')"><i class="fas fa-trash"></i></button>
                                </form>
                            </td>
                        </tr>
                        @endforeach
                    </tbody>
                </table>
            </div>
        </div>
    </div>
</div>

<!-- Modal -->
<div class="modal fade" id="exampleModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog">
    <div class="modal-content">
      <div class="modal-header">
        <h1 class="modal-title fs-5" id="exampleModalLabel">Tambah Personil</h1>
        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
      </div>
      <div class="modal-body">
        <div class="card">
            <div class="card-body">
                <form method="POST" action="{{ route('personil.store') }}" enctype="multipart/form-data" class="form-horizontal form-material">
                    @csrf
                    <div class="form-group mb-4">
                        <label class="col-md-12 p-0">NRP</label>
                        <div class="col-md-12 border-bottom p-0">
                            <input name="nrp" type="text" placeholder="Isi nrp..."
                            class="form-control p-0 border-0"> 
                        </div>
                    </div>
                    <div class="form-group mb-4">
                        <label class="col-md-12 p-0">Nomor HP</label>
                        <div class="col-md-12 border-bottom p-0">
                            <input name="no_hp" type="text" placeholder="Isi nomor hp..."
                                class="form-control p-0 border-0">
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="modal-footer">
            <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
            <button type="submit" class="btn btn-primary">Save <i class="fas fa-save"></i></button>
        </div>
    </form>
    </div>
  </div>
</div>
@endsection