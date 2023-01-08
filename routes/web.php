<?php

use Illuminate\Support\Facades\Route;
use Illuminate\Support\Facades\Auth;
use Illuminate\Http\Request;
use App\Models\Personil;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::get('/', function () {
    return redirect()->route('login');
});

Route::get('/user-login', [App\Http\Controllers\PersonilController::class,'create'])->name('user-login');
Route::post('/user-login', [App\Http\Controllers\PersonilController::class,'loginCustom']);
Route::get('/personils', [App\Http\Controllers\PersonilController::class,'index'])->name('personils');
Route::post('/personil', [App\Http\Controllers\PersonilController::class,'store'])->name('personil.store');
Route::patch('/personil/{id}', [App\Http\Controllers\PersonilController::class,'updatePersonil'])->name('personil.update');
Route::get('/personil', [App\Http\Controllers\PersonilController::class,'show'])->name('personil.show');
Route::delete('/personil/{personil}', [App\Http\Controllers\PersonilController::class,'destroy'])->name('personil.destroy');
Route::get('/personil/pengajuan', [App\Http\Controllers\PersonilController::class,'showPengajuan'])->name('personil.pengajuan');
Route::get('/laporan', [App\Http\Controllers\LaporanController::class,'index'])->name('laporan');
Route::patch('/update-status/{nomor}', [App\Http\Controllers\DaftarPengajuanController::class,'updateStatus'])->name('update.status');

Route::resource('pengajuan', App\Http\Controllers\DaftarPengajuanController::class);
Route::resource('jadwal', App\Http\Controllers\JKPController::class);
// Route::get('/dashboard', function () {
//     return view('dashboard');
// })->middleware(['auth'])->name('dashboard');
Route::get('/dashboard', function () {
    $personil = count(Personil::all());
    return view('layouts.app_admin.home', compact('personil'));
})->name('dashboard');

require __DIR__.'/auth.php';
