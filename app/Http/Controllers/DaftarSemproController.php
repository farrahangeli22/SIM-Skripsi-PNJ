<?php

namespace App\Http\Controllers;

use Auth;
use App\Models\Mahasiswa;
use App\Models\Dosen;
use App\Models\HasilSempro;
use App\Models\PengajuanSempro;
use Illuminate\Support\Facades\Session;
use Illuminate\Http\Request;

class DaftarSemproController extends Controller
{
    function viewDaftarSempro(Request $request)
    {
        $daftarSempro = pengajuanSempro::where('dosen_penguji1', auth::user()->username) -> orWhere('dosen_penguji2', auth::user()->username) -> orWhere('dosen_penguji3', auth::user()->username)->
        get();

        // dd($daftarSempro);
        return view('penguji.daftarSempro',['daftarSempro'=> $daftarSempro]);
    }
}
