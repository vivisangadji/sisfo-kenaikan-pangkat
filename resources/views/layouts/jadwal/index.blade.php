@extends('layouts.app_admin.app')

@section('content')
<div class="row">
    <div class="col-sm-12">
        <div class="white-box">
            <h3 class="box-title">Jadwal Table</h3>
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
                            <th class="border-top-0">Jadwal Kenaikan Pangkat</th>
                            <th class="border-top-0">Action</th>
                        </tr>
                    </thead>
                    <tbody>
                        @foreach($jadwals as $key => $jadwal)
                        <tr>
                            <td>1</td>
                            <td>{{ $jadwal->nama }}</td>
                            <td>{{ $jadwal->nrp }}</td>
                            <td>{{ $jadwal->no_hp }}</td>
                            <td>
                                <img src="{{ asset($jadwal->foto) }}" alt="{{ $jadwal->nama }}" width="100">
                            </td>
                            <td>{{ $jadwal->pangkat_sekarang }}</td>
                            <td>
                                <form action="{{ route('jadwal.destroy', $jadwal->id) }}" method="POST">
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
@endsection