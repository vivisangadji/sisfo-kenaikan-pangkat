<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Validator;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\File;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Storage;
use Illuminate\Support\Facades\DB;
use App\Providers\RouteServiceProvider;
use App\Models\DaftarPengajuan;
use App\Models\Personil;


class PersonilController extends Controller
{
    public function index(){
        $personils = Personil::all();
        return view('layouts.personils.index', compact('personils'));
    }

    public function create(){
        return view('auth.user-login');
    }

    public function show(){
        $user = session()->get('id')[0];
        $personil = Personil::find($user->id);
        return view('layouts.personils.data-diri', compact('personil'));
    }

    public function showPengajuan(){
        $pengajuans = DaftarPengajuan::all();
        return view('layouts.pengajuan.index', compact('pengajuans'));
    }

    public function store(Request $request){
        $validator = Validator::make($request->all(), [
            'nrp' => 'required',
            'no_hp' => 'required'
        ]);

        if ($validator->fails()) {
            return redirect()->route('personils')
                   ->withErrors($validator)
                   ->withInput();
        }

        Personil::create([
            'nama' => '-', 
            'nrp' => $request->nrp, 
            'no_hp' => $request->no_hp,
            'pangkat_sekarang' => '-',
            'password' => Hash::make('password')
        ]);

        return redirect()->route('personils')->with(['message' => 'Personil added successfully!', 'status' => 'success']);
    }

    public function updatePersonil(Request $request, $id){
        $personil = Personil::FindOrFail($id);
        if ($request->hasFile('foto')) {
            //delete old image
            $destination = $personil->foto;
            if (File::exists($destination)) {
                File::delete($destination);
            }

            // upload new image
            $newFoto = $request->file('foto')->store('storage');
            Storage::putFile('public', $request->file('foto'));

            $personil->update([
                'nama' => $request->nama, 
                'ttl' => $request->ttl, 
                'pangkat_sekarang' => $request->pangkat_sekarang, 
                'jenis_kelamin' => $request->jenis_kelamin, 
                'foto' => $newFoto
            ]);
        }else {
            $personil->update([
                'nama' => $request->nama, 
                'ttl' => $request->ttl, 
                'pangkat_sekarang' => $request->pangkat_sekarang, 
                'jenis_kelamin' => $request->jenis_kelamin
            ]);
        }
        return redirect()->route('dashboard')->with(['message' => 'Updated successfully!', 'status' => 'success']);
    }

    public function loginCustom(Request $request){
        $cekPerson = DB::table('personils')->where('nrp', '=' , $request->nrp)->exists();
        $userId = DB::table('personils')
                       ->select('id')
                       ->where('nrp', $request->nrp)
                       ->get();
        if ($cekPerson) {
            session()->put('id', $userId);
            return redirect()->route('dashboard');
        }
    }

    public function destroy($id)
    {
        $personil = Personil::find($id);
        File::delete($personil->foto);

        Personil::where('id', $id)->delete();
        return redirect()->route('personils')->with(['message' => 'Personil deleted successfully!', 'status' => 'success']);
    }
}
