<?php

use App\Http\Controllers\PengajuanJudulController;
use App\Http\Controllers\PengajuanSidangController;
use App\Http\Controllers\ProfileController;
use App\Http\Controllers\DaftarMahasiswaController;
use App\Http\Controllers\LogBookController;
use App\Http\Controllers\RoleController;
use App\Models\PengajuanJudul;
use App\Models\PengajuanSidang;
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

// Route::middleware('auth')->group(function () {
//     Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
//     Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
//     Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
// });

// routes for user role

Route::middleware('auth')->group(function () {

    // logbook mahasiswa
    Route::get("/logbook", [LogBookController::class, 'viewLogBookMahasiswa'])->name('user.logbook');

    // pengajuan judul
    Route::get('/pengajuan-judul', [PengajuanJudulController::class, 'viewPengajuanJudul'])->name('user.pengajuan-judul');
    Route::post('/pengajuan-judul', [PengajuanJudulController::class, 'createPengajuanJudul'])->name('user.create-pengajuan-judul');

    // daftar mahasiswa
    Route::get('/daftar-mahasiswa', [DaftarMahasiswaController::class, 'viewDaftarMahasiswa'])->name('dosen.daftar-mahasiswa');
    Route::put('/terima-permintaan-judul/{idPengajuanJudul}', [DaftarMahasiswaController::class, 'terimaPermintaanBimbingan']);

    // pengajuan sidang
    Route::get('/pengajuan-sidang', [PengajuanSidangController::class, 'viewPengajuanSidang'])->name('user.pengajuan-sidang');
    Route::post('/pengajuan-sidang', [PengajuanSidangController::class, 'createPengajuanSidang'])->name('user.create-pengajuan-sidang');

    // penyerahan alat
    Route::get('/penyerahan-alat', [PenyerahanAlatController::class, 'viewPenyerahanAlat'])->name('user.penyerahan-alat');
    Route::post('/penyerahan-alat', [PenyerahanAlatController::class, 'createPenyerahanAlat'])->name('user.create-penyerahan-alat');
});



Route::get("/home", function () {
    return view('user.home');
})->name('user.home');

Route::get("/form-logbook", function () {
    return view('user.formLogbook');
})->name('user.form-logbook');

Route::get("/detail-logbook", function () {
    return view('user.detailLogbook');
})->name('user.detail-logbook');

Route::get("/profile", function () {
    return view('user.profile');
})->name('user.profile');

Route::get("/pengajuan-sempro", function () {
    return view('user.pengajuanSempro');
})->name('user.pengajuan-sempro');

// Route::get("/pengajuan-sidang", function () {
//     return view('user.pengajuanSidang');
// })->name('user.pengajuan-sidang');

// Route::get("/penyerahan-alat", function () {
//     return view('user.penyerahanAlat');
// })->name('user.penyerahan-alat');

Route::get("/notification", function () {
    return view('user.notification');
})->name('user.notification');



// routes for user dosen
// Route::get("/dosen/daftar-mahasiswa", function () {
//     return view('dosen.daftarMahasiswa');
// })->name('dosen.daftar-mahasiswa');

Route::get("/dosen/logbook", function () {
    return view('dosen.logbookMahasiswa');
})->name('dosen.logbook');

Route::get("/dosen/detail-logbook", function () {
    return view('dosen.detailLogbook');
})->name('dosen.detail-logbook');

Route::get("/dosen/detail-mahasiswa", function () {
    return view('dosen.detailMahasiswa');
})->name('dosen.detail-mahasiswa');


// routes for user admin
Route::get("/admin/dashboard-admin", function () {
    return view('admin.dashboardAdmin');
})->name('admin.dashboard-admin');

Route::get("/admin/manajemen-mahasiswa", function () {
    return view('admin.manajemenMahasiswa');
})->name('admin.manajemen-mahasiswa');

Route::get("/admin/manajemen-dosen", function () {
    return view('admin.manajemenDosen');
})->name('admin.manajemen-dosen');

Route::get("/admin/manajemen-kps", function () {
    return view('admin.manajemenKPS');
})->name('admin.manajemen-kps');

Route::get("/admin/edit-konten", function () {
    return view('admin.editKonten');
})->name('admin.edit-konten');

Route::get("/admin/tambah-konten", function () {
    return view('admin.tambahKonten');
})->name('admin.tambah-konten');

Route::get("/admin/pengajuan-judul", function () {
    return view('admin.adminJudul');
})->name('admin.pengajuan-judul');

Route::get("/admin/pengajuan-seminar", function () {
    return view('admin.adminSeminar');
})->name('admin.pengajuan-seminar');

Route::get("/admin/pengajuan-sidang", function () {
    return view('admin.adminSidang');
})->name('admin.pengajuan-sidang');

Route::get("/admin/penyerahan-alat", function () {
    return view('admin.adminAlat');
})->name('admin.penyerahan-alat');

Route::get('/role/switch/{roleId}', [RoleController::class, 'switchRole'])->name('switch-role');

require __DIR__ . '/auth.php';