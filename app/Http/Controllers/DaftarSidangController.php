<?php

namespace App\Http\Controllers;

use Auth;
use App\Models\Mahasiswa;
use App\Models\Dosen;
use App\Models\HasilSidang;
use App\Models\PengajuanSidang;
use Illuminate\Support\Facades\Session;
use Illuminate\Http\Request;

class DaftarSidangController extends Controller
{
    function viewDaftarSidang(Request $request)
    {
        $daftarSidang = pengajuanSidang::where('dosen_penguji1', auth::user()->username) -> orWhere('dosen_penguji2', auth::user()->username) -> orWhere('dosen_penguji3', auth::user()->username)->
        get();

        // dd($daftarSempro);
        return view('penguji.daftarSidang',['daftarSidang'=> $daftarSidang]);
    }
}
