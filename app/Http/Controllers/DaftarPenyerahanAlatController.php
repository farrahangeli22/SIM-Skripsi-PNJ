<?php

namespace App\Http\Controllers;

use Illuminate\Support\Facades\Storage;
use App\Models\PenyerahanAlat;
use Illuminate\Http\Request;

class DaftarPenyerahanAlatController extends Controller
{
    function viewDaftarPenyerahanAlat(Request $request)
    {
        $daftarPenyerahanAlat = PenyerahanAlat::with("mahasiswa")->get();;
        // dd($daftarPenyerahanAlat);
        return view('admin.daftarPenyerahanAlat',['daftarPenyerahanAlat'=> $daftarPenyerahanAlat]);
    }
}
