<?php

namespace App\Http\Controllers;

use App\Models\Mahasiswa;
use App\Models\Dosen;
use App\Models\UserRole;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class ManajemenMahasiswaController extends Controller
{
    function viewManajemenMahasiswa(Request $request)
    {
        // ambil data mahasiswa bimbingan dari table Mahasiswa
        $daftarMahasiswa = Mahasiswa::get();

        // mengembalikan view dengan data
        // dd($daftarMahasiswa);
        return view('admin.manajemenMahasiswa')->with('daftarMahasiswa', $daftarMahasiswa);
    }
}