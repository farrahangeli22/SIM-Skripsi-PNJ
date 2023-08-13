<?php

namespace App\Http\Controllers;

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
        $daftarSempro = pengajuanSempro::with(["mahasiswa"=>function($query){
            return $query->with("dosen");
            }])->get();;

        $dosen = Dosen::get();
        // dd($daftarSempro);
        return view('penguji.daftarSempro',['daftarSempro'=> $daftarSempro,'dosen'=> $dosen]);
    }
}
