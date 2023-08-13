<?php

namespace App\Http\Controllers;

use App\Models\Mahasiswa;
use App\Models\Dosen;
use App\Models\HasilSempro;
use App\Models\PengajuanSempro;
use Illuminate\Support\Facades\Session;
use Illuminate\Http\Request;

class PenilaianSemproController extends Controller
{
    function viewPenilaianSempro(Request $request)
    {
        $penilaianSempro = pengajuanSempro::with(["mahasiswa"=>function($query){
            return $query->with("dosen");
            }])->get();;

        $dosen = Dosen::get();
        // dd($daftarSempro);
        return view('penguji.penilaianSempro',['penilaianSempro'=> $penilaianSempro,'dosen'=> $dosen]);
    }
}
