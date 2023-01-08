@extends('layouts.app_admin.app')

@section('content')
<div class="row">
    <div class="col-sm-12">
        <div class="white-box">
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
                            <td>1</td>
                            <td>{{ $pengajuan->no_pengajuan }}</td>
                            <td>{{ $pengajuan->nama_personil }}</td>
                            <td>{{ $pengajuan->tanggal_pengajuan }}</td>
                            <td>{{ $pengajuan->pangkat_tujuan }}</td>
                            <td>{{ $pengajuan->pangkat_sekarang }}</td>
                            <td><strong>{{ $pengajuan->status }}</strong></td>
                            <td>
                                <form action="{{ route('update.status', $pengajuan->no_pengajuan) }}" method="POST">
                                @csrf
                                @method('PATCH')
                                @if($pengajuan->status == 'Proses')
                                <button type="submit" class="btn btn-outline-primary" name="diterima">Terima</button>
                                <button type="submit" class="btn btn-outline-danger" name="ditolak">Tolak</button>
                                @else
                                <p></p>
                                @endif
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
@endsection