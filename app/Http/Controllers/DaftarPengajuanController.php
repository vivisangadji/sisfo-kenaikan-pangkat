<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\DateFactory;
use Illuminate\Support\Facades\DB;
use App\Models\DaftarPengajuan;
use App\Models\Personil;

class DaftarPengajuanController extends Controller
{
    public function index()
    {
        $pengajuans = DaftarPengajuan::all();
        return view('layouts.daftar_pengajuan.index', compact('pengajuans'));
    }
    
    public function create()
    {
        //
    }
    
    public function store(Request $request)
    {
        $user = session()->get('id')[0];
        $personil = Personil::find($user->id);

        DaftarPengajuan::create([
            'no_pengajuan' => random_int(100000, 999999), 
            'nama_personil' => $personil->nama, 
            'tanggal_pengajuan' => date('Y-m-d'),
            'pangkat_sekarang' => $personil->pangkat_sekarang,
            'pangkat_tujuan' => $request->pangkat_tujuan,
            'alasan_ditolak' => '',
        ]);
        return redirect()->route('personil.pengajuan');
    }

    public function updateStatus(Request $request, $no_pengajuan){
        $data = DaftarPengajuan::where('no_pengajuan', $no_pengajuan)->get()[0];
        
        if ($request->has('diterima')) { 
            $data->update([
                'status' => 'Diterima'
            ]);
        }else {
            $data->update([
                'status' => 'Ditolak'
            ]);
        }
        return redirect()->route('pengajuan.index');
    }

    public function show($id)
    {
        //
    }

    public function edit($id)
    {
        //
    }

    public function update(Request $request, $id)
    {
        //
    }

    public function destroy($id)
    {
        //
    }
}
