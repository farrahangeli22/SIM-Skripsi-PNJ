<?php

namespace App\Http\Controllers;

use App\Models\PengajuanSidang;
use Illuminate\Http\Request;

class DaftarPengajuanSidangController extends Controller
{
    function viewDaftarPengajuanSidang(Request $request)
    {
        $daftarPengajuanSidang = PengajuanSidang::with(["mahasiswa"=>function($query){
            return $query->with("dosen");
            }])->get();;
        // dd($daftarPengajuanSidang);
        return view('admin.daftarPengajuanSidang',['daftarPengajuanSidang'=> $daftarPengajuanSidang]);
    }
}
