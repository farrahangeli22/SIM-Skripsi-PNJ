<?php

namespace App\Http\Controllers;

use App\Models\PengajuanSidang;
use Illuminate\Http\Request;

class DaftarPengajuanSidangController extends Controller
{
    function viewDaftarPengajuanSidang(Request $request)
    {
        $daftarPengajuanSidang = PengajuanSidang::get();
        
        return view('admin.daftarPengajuanSidang',['daftarPengajuanSidang'=> $daftarPengajuanSidang]);
    }
}
