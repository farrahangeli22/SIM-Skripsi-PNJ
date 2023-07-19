<?php

use App\Http\Controllers\StorageController;
use App\Http\Controllers\PengajuanJudulController;
use App\Http\Controllers\DaftarPengajuanJudulController;
use App\Http\Controllers\PengajuanSemproController;
use App\Http\Controllers\DaftarPengajuanSemproController;
use App\Http\Controllers\PengajuanSidangController;
use App\Http\Controllers\DaftarPengajuanSidangController;
use App\Http\Controllers\PenyerahanAlatController;
use App\Http\Controllers\DaftarPenyerahanAlatController;
use App\Http\Controllers\ProfileController;
use App\Http\Controllers\DaftarMahasiswaController;
use App\Http\Controllers\LogBookController;
use App\Http\Controllers\DaftarLogBookController;
use App\Http\Controllers\DetailLogBookController;
use App\Http\Controllers\FormLogbookController;
use App\Http\Controllers\DetailLogBookMahasiswaController;
use App\Http\Controllers\DetailMahasiswaController;
use App\Http\Controllers\RoleController;
use App\Http\Controllers\ManajemenMahasiswaController;
use App\Http\Controllers\ManajemenKPSController;
use App\Http\Controllers\ManajemenDosenController;
use App\Http\Controllers\TambahKontenController;
use App\Http\Controllers\KontenController;
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
    return view('auth/login');
});

Route::get('/dashboard', function () {
    return view('dashboard');
})->middleware(['auth', 'verified'])->name('dashboard');

// Route::middleware('auth')->group(function () {
//     Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
//     Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
//     Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
// });


Route::middleware('auth')->group(function () {
    // untuk storage jurnal
    Route::get('/storage/{folder}/{filename}',[StorageController::class,'getFile']);

    // user - logbook mahasiswa 
    Route::get("/logbook", [LogBookController::class, 'viewLogBookMahasiswa'])->name('user.logbook');

    // user - Form logbook mahasiswa
    Route::get('/form-logbook', [FormLogbookController::class, 'viewFormLogbook'])->name('user.form-logbook');
    Route::post('/form-logbook', [FormLogbookController::class, 'createFormLogbook'])->name('user.create-form-logbook');
    
    // user - detail logbook
    Route::get('/detail-logbook-mahasiswa/{id}', [DetailLogbookMahasiswaController::class, 'viewDetailLogbookMahasiswa'])->name('user.detail-logbook-mahasiswa');
   
    // user - pengajuan judul
    Route::get('/pengajuan-judul', [PengajuanJudulController::class, 'viewPengajuanJudul'])->name('user.pengajuan-judul');
    Route::post('/pengajuan-judul', [PengajuanJudulController::class, 'createPengajuanJudul'])->name('user.create-pengajuan-judul');

    // user - pengajuan sempro
    Route::get('/pengajuan-sempro', [PengajuanSemproController::class, 'viewPengajuanSempro'])->name('user.pengajuan-sempro');
    Route::post('/pengajuan-sempro', [PengajuanSemproController::class, 'createPengajuanSempro'])->name('user.create-pengajuan-sempro');
    
    // dosen - daftar mahasiswa
    Route::get('/daftar-mahasiswa', [DaftarMahasiswaController::class, 'viewDaftarMahasiswa'])->name('dosen.daftar-mahasiswa');
    Route::put('/terima-permintaan-judul/{idPengajuanJudul}', [DaftarMahasiswaController::class, 'terimaPermintaanBimbingan']);

    // dosen - daftar logbook
    Route::get('/daftar-logbook', [DaftarLogbookController::class, 'viewDaftarLogbook'])->name('dosen.daftar-logbook');

    // dosen - detail logbook
    Route::get('/detail-logbook/{id}', [DetailLogbookController::class, 'viewDetailLogbook'])->name('dosen.detail-logbook');
    Route::post('/detail-logbook/{id}', [DetailLogbookController::class, 'updateDetailLogbook'])->name('dosen.detail-logbook');


    // user - pengajuan sidang
    Route::get('/pengajuan-sidang', [PengajuanSidangController::class, 'viewPengajuanSidang'])->name('user.pengajuan-sidang');
    Route::post('/pengajuan-sidang', [PengajuanSidangController::class, 'createPengajuanSidang'])->name('user.create-pengajuan-sidang');

    // user - penyerahan alat
    Route::get('/penyerahan-alat', [PenyerahanAlatController::class, 'viewPenyerahanAlat'])->name('user.penyerahan-alat');
    Route::post('/penyerahan-alat', [PenyerahanAlatController::class, 'createPenyerahanAlat'])->name('user.create-penyerahan-alat');

    // user - profile
    Route::get('/profile', [ProfileController::class, 'viewProfile'])->name('user.profile');
    Route::post('/profile', [ProfileController::class, 'createProfile'])->name('user.create-profile');

    // admin - manajemen KPS
    Route::get('/manajemen-kps', [ManajemenKPSController::class, 'viewManajemenKPS'])->name('admin.manajemen-kps');
    
    // admin - manajemen Dosen Pembimbing
    Route::get('/manajemen-dosen', [ManajemenDosenController::class, 'viewManajemenDosen'])->name('admin.manajemen-dosen');

    // admin - manajemen Mahasiswa
    Route::get('/manajemen-mahasiswa', [ManajemenMahasiswaController::class, 'viewManajemenMahasiswa'])->name('admin.manajemen-mahasiswa');

    // dosen - detail mahasiswa
    Route::get('/detail-mahasiswa/{id}', [DetailMahasiswaController::class, 'viewDetailMahasiswa'])->name('dosen.detail-mahasiswa');
    Route::post('/detail-mahasiswa/{id}', [DetailMahasiswaController::class, 'createDetailSempro'])->name('dosen.create-detail-mahasiswa');
    Route::post('/detail-mahasiswa/{id}', [DetailMahasiswaController::class, 'createDetailSidang'])->name('dosen.create-detail-mahasiswa');

    // admin - tambah konten
    Route::get('/tambah-konten', [TambahKontenController::class, 'viewTambahKonten'])->name('admin.tambah-konten');
    Route::post('/tambah-konten', [TambahKontenController::class, 'createTambahKonten'])->name('admin.create-tambah-konten');

    // admin - konten
    Route::get("/konten", [KontenController::class, 'viewKonten'])->name('admin.konten');

    // admin - daftar pengajuan judul
    Route::get('/daftar-pengajuan-judul', [DaftarPengajuanJudulController::class, 'viewDaftarPengajuanJudul'])->name('admin.daftar-pengajuan-judul');

    // admin - daftar pengajuan sempro
    Route::get('/daftar-pengajuan-sempro', [DaftarPengajuanSemproController::class, 'viewDaftarPengajuanSempro'])->name('admin.daftar-pengajuan-sempro');

    // admin - daftar pengajuan sidang
    Route::get('/daftar-pengajuan-sidang', [DaftarPengajuanSidangController::class, 'viewDaftarPengajuanSidang'])->name('admin.daftar-pengajuan-sidang');

    // admin - daftar pengajuan sempro
    Route::get('/daftar-penyerahan-alat', [DaftarPenyerahanAlatController::class, 'viewDaftarPenyerahanAlat'])->name('admin.daftar-penyerahan-alat');

});



Route::get("/home", function () {
    return view('user.home');
})->name('user.home');

// Route::get("/form-logbook", function () {
//     return view('user.formLogbook');
// })->name('user.form-logbook');

// Route::get("/detail-logbook", function () {
//     return view('user.detailLogbook');
// })->name('user.detail-logbook');

// Route::get("/profile", function () {
//     return view('user.profile');
// })->name('user.profile');

// Route::get("/pengajuan-sempro", function () {
//     return view('user.pengajuanSempro');
// })->name('user.pengajuan-sempro');

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

// Route::get("/dosen/logbook", function () {
//     return view('dosen.logbookMahasiswa');
// })->name('dosen.logbook');

// Route::get("/dosen/detail-logbook", function () {
//     return view('dosen.detailLogbook');
// })->name('dosen.detail-logbook');

// Route::get("/dosen/detail-mahasiswa", function () {
//     return view('dosen.detailMahasiswa');
// })->name('dosen.detail-mahasiswa');


// routes for user admin
Route::get("/admin/dashboard-admin", function () {
    return view('admin.dashboardAdmin');
})->name('admin.dashboard-admin');

// Route::get("/admin/manajemen-mahasiswa", function () {
//     return view('admin.manajemenMahasiswa');
// })->name('admin.manajemen-mahasiswa');

// Route::get("/admin/manajemen-dosen", function () {
//     return view('admin.manajemenDosen');
// })->name('admin.manajemen-dosen');

// Route::get("/admin/manajemen-kps", function () {
//     return view('admin.manajemenKPS');
// })->name('admin.manajemen-kps');

// Route::get("/admin/konten", function () {
//     return view('admin.Konten');
// })->name('admin.konten');

// Route::get("/admin/tambah-konten", function () {
//     return view('admin.tambahKonten');
// })->name('admin.tambah-konten');

// Route::get("/admin/pengajuan-judul", function () {
//     return view('admin.adminJudul');
// })->name('admin.pengajuan-judul');

// Route::get("/admin/pengajuan-seminar", function () {
//     return view('admin.adminSeminar');
// })->name('admin.pengajuan-seminar');

// Route::get("/admin/pengajuan-sidang", function () {
//     return view('admin.adminSidang');
// })->name('admin.pengajuan-sidang');

// Route::get("/admin/penyerahan-alat", function () {
//     return view('admin.adminAlat');
// })->name('admin.penyerahan-alat');

Route::get('/role/switch/{roleId}', [RoleController::class, 'switchRole'])->name('switch-role');

require __DIR__ . '/auth.php';