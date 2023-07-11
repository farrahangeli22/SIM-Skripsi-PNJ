<?php

namespace App\Http\Controllers;

use App\Models\Dosen;
use App\Models\Mahasiswa;
use App\Models\PengajuanDospem;
use App\Models\PengajuanJudul;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class DaftarMahasiswaController extends Controller
{
    // return view daftar mahasiswa
    function viewDaftarMahasiswa(Request $request)
    {
        // ambil data pengajuan judul
        $pengajuan_judul = PengajuanJudul::with(['pengajuanDospem' => function ($query) {
            $query->where('nip_dospem', Auth::user()->username);
        }, 'mahasiswa'])->get();
        // ambil data mahasiswa bimbingan

        // mengembalikan view dengan data
        return view('dosen.daftarMahasiswa')->with('pengajuanJudul', $pengajuan_judul);
    }
}
