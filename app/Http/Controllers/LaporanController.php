<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\DaftarPengajuan;

class LaporanController extends Controller
{
    public function index(){
        $laporans = DaftarPengajuan::all();
        return view('layouts.laporan.index', compact('laporans'));
    }
}
