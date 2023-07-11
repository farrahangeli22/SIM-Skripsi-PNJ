<?php

namespace App\Http\Controllers;

use App\Models\Dosen;
use App\Models\Mahasiswa;
use App\Models\PengajuanDospem;
use App\Models\PengajuanJudul;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class DaftarMahasiswaController extends Controller
{
    // return view daftar mahasiswa
    function viewDaftarMahasiswa(Request $request)
    {
        // ambil data mahasiswa dari db
        // where nim == username authenticated user
        $pengajuan_judul = PengajuanJudul::with(['pengajuanDospem' => function ($query) {
            $query->where('nip',$request->user()->username);
        }])->get();
        // // ambil data dosen dari db
        // $dosen = Dosen::all();
        // mengembalikan view dengan data
        dd($pengajuan_judul);
        return view('dosen.daftarMahasiswa')->with('pengajuanJudul', $pengajuan_judul);
    }
}
