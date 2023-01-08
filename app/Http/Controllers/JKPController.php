<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\JadwalKenaikanPangkat;

class JKPController extends Controller
{
    public function index()
    {
        $jadwals = JadwalKenaikanPangkat::all();
        return view('layouts.jadwal.index', compact('jadwals'));
    }

    public function create()
    {
        
    }

    public function store(Request $request)
    {
        //
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
