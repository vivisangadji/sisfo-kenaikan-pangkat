@extends('layouts.app_admin.app')

@section('content')
<div class="row">
    <div class="col-sm-12">
        <div class="white-box">
            <h3 class="box-title">Laporan Table</h3>
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
                            <th class="border-top-0">Alasan Penolakan</th>
                            <th class="border-top-0">Jadwal Kenaikan</th>
                        </tr>
                    </thead>
                    <tbody>
                        @foreach($laporans as $key => $laporan)
                        <tr>
                            <td></td>
                            <td>{{ $laporan->no_pengajuan }}</td>
                            <td>{{ $laporan->nama_personil }}</td>
                            <td>{{ $laporan->tanggal_pengajuan }}</td>
                            <td>{{ $laporan->pangkat_tujuan }}</td>
                            <td>{{ $laporan->pangkat_sekarang }}</td>
                            <td>{{ $laporan->status }}</td>
                            <td>{{ $laporan->alasan_ditolak }}</td>
                        </tr>
                        @endforeach
                    </tbody>
                </table>
            </div>
        </div>
    </div>
</div>
@endsection