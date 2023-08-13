<?php

namespace App\Http\Controllers;

use App\Models\Mahasiswa;
use App\Models\Dosen;
use App\Models\HasilSidang;
use App\Models\PengajuanSidang;
use Illuminate\Support\Facades\Session;
use Illuminate\Http\Request;

class PenilaianSidangController extends Controller
{
    function viewPenilaianSidang(Request $request)
    {
        $penilaianSidang = pengajuanSidang::with(["mahasiswa"=>function($query){
            return $query->with("dosen");
            }])->get();;

        $dosen = Dosen::get();
        
        return view('penguji.penilaianSidang',['penilaianSidang'=> $penilaianSidang,'dosen'=> $dosen]);
    }
}
