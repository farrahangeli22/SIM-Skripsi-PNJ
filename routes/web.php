<?php

use App\Http\Controllers\ProfileController;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/

Route::get('/', function () {
    return view('welcome');
});

Route::get('/dashboard', function () {
    return view('dashboard');
})->middleware(['auth', 'verified'])->name('dashboard');

Route::middleware('auth')->group(function () {
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
});

// routes for user role
Route::get("/home", function () {
    return view('user.home');
})->name('user.home');

Route::get("/logbook", function () {
    return view('user.logbook');
})->name('user.logbook');

Route::get("/form-logbook", function () {
    return view('user.formLogbook');
})->name('user.form-logbook');

Route::get("/detail-logbook", function () {
    return view('user.detailLogbook');
})->name('user.detail-logbook');

Route::get("/profile", function () {
    return view('user.profile');
})->name('user.profile');

Route::get("/pengajuan-judul", function () {
    return view('user.pengajuanJudul');
})->name('user.pengajuan-judul');

Route::get("/pengajuan-sempro", function () {
    return view('user.pengajuanSempro');
})->name('user.pengajuan-sempro');

Route::get("/pengajuan-skripsi", function () {
    return view('user.pengajuanSkripsi');
})->name('user.pengajuan-skripsi');

Route::get("/penyerahan-alat", function () {
    return view('user.penyerahanAlat');
})->name('user.penyerahan-alat');

Route::get("/notification", function () {
    return view('user.notification');
})->name('user.notification');



// routes for user dosen
Route::get("/dosen/daftar-mahasiswa", function () {
    return view('dosen.daftarMahasiswa');
})->name('dosen.daftar-mahasiswa');

Route::get("/dosen/logbook", function () {
    return view('dosen.logbookMahasiswa');
})->name('dosen.logbook');

Route::get("/dosen/detail-logbook", function () {
    return view('dosen.detailLogbook');
})->name('dosen.detail-logbook');

Route::get("/dosen/detail-mahasiswa", function () {
    return view('dosen.detailMahasiswa');
})->name('dosen.detail-mahasiswa');

require __DIR__ . '/auth.php';
