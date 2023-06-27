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

Route::get("/uploadSkripsi", function () {
    return view('user.uploadSkripsi');
})->name('user.uploadSkripsi');

Route::get("/pengajuanJudul", function () {
    return view('user.pengajuanJudul');
})->name('user.pengajuanJudul');

Route::get("/pengajuanJudul", function () {
    return view('user.pengajuanJudul');
})->name('user.pengajuanJudul');

Route::get("/pengajuanSempro", function () {
    return view('user.pengajuanSempro');
})->name('user.pengajuanSempro');

Route::get("/pengajuanSkripsi", function () {
    return view('user.pengajuanSkripsi');
})->name('user.pengajuanSkripsi');

Route::get("/penyerahanAlat", function () {
    return view('user.penyerahanAlat');
})->name('user.penyerahanAlat');

Route::get("/notification", function () {
    return view('user.notification');
})->name('user.notification');

require __DIR__ . '/auth.php';
