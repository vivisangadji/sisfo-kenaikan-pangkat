@extends('layouts.app_admin.app')

@section('content')
<div class="row">
    <div class="col-sm-12">
        <div class="white-box">
            <!-- Button trigger modal tambah personil -->
            <button type="button" class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#exampleModal">
                Ajukan Kenaikan <i class="fas fa-file-alt"></i>
            </button>
            <h3 class="box-title">Daftar Pengajuan Table</h3>
            <div class="table-responsive">
                <table class="table text-nowrap">
                    <thead>
                        <tr>
                            <th class="border-top-0">#</th>
                            <th class="border-top-0">Nomor Pengajuan</th>
                            <th class="border-top-0">Nama Personil</th>
                            <th class="border-top-0">Tanggal Pengajuan</th>
                            <th class="border-top-0">Pangkat Yang Di Inginkan</th>
                            <th class="border-top-0">Pangkat Sekarang</th>
                            <th class="border-top-0">Status</th>
                            <th class="border-top-0">Action</th>
                        </tr>
                    </thead>
                    <tbody>
                        @foreach($pengajuans as $key => $pengajuan)
                        <tr>
                            <td></td>
                            <td>{{ $pengajuan->no_pengajuan }}</td>
                            <td>{{ $pengajuan->nama_personil }}</td>
                            <td>{{ $pengajuan->tanggal_pengajuan }}</td>
                            <td>{{ $pengajuan->pangkat_tujuan }}</td>
                            <td>{{ $pengajuan->pangkat_sekarang }}</td>
                            <td>{{ $pengajuan->status }}</td>
                            
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
        <h1 class="modal-title fs-5" id="exampleModalLabel">Pengajuan Pangkat</h1>
        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
      </div>
      <div class="modal-body">
        <div class="card">
            <div class="card-body">
                <form method="POST" action="{{ route('pengajuan.store') }}" enctype="multipart/form-data" class="form-horizontal form-material">
                    @csrf
                    <div class="form-group mb-4">
                        <label class="col-md-12 p-0">Pangkat di Tuju</label>
                        <div class="col-md-12 border-bottom p-0">
                            <input name="pangkat_tujuan" type="text" placeholder="Isi pangkat tujuan..."
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