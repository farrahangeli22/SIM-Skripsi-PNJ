<?php

namespace App\Http\Controllers;

use App\Models\PengajuanSempro;
use Illuminate\Http\Request;

class DaftarPengajuanSemproController extends Controller
{
    function viewDaftarPengajuanSempro(Request $request)
    {
        $daftarPengajuanSempro = PengajuanSempro::with(["mahasiswa"=>function($query){
            return $query->with("dosen");
            }])->get();;
        // dd($daftarPengajuanSempro);
        return view('admin.daftarPengajuanSempro',['daftarPengajuanSempro'=> $daftarPengajuanSempro]);
    }
}
