<?php

namespace App\Http\Controllers;

use App\Models\Mahasiswa;
use Illuminate\Support\Facades\Session;
use Illuminate\Support\Facades\Storage;
use App\Models\PenyerahanAlat;
use Illuminate\Http\Request;

class DaftarPenyerahanAlatController extends Controller
{
    function viewDaftarPenyerahanAlat(Request $request)
    {
        $daftarPenyerahanAlat = PenyerahanAlat::get();
        // dd($daftarPenyerahanAlat);
        return view('admin.daftarPenyerahanAlat',['daftarPenyerahanAlat'=> $daftarPenyerahanAlat]);
    }

    function createDaftarPenyerahanAlat(Request $request)
{  
    // Cari atau buat data PenyerahanAlat berdasarkan nim
    $penyerahanAlat = PenyerahanAlat::updateOrCreate(
         ['nim' => $request->nim]
    );
    

    // Jika ada file f11 yang diupload, simpan file tersebut ke kolom file_f11
     if ($request->hasFile('f11')) {
        $path = $request->file('f11')->store('/file_f11');
        PenyerahanAlat::updateOrCreate(
            [
                'file_f11' => $path,
            ]
        );
    }

    Session::flash('message', 'Penyerahan alat berhasil terkirim');
    return redirect(route('admin.daftar-penyerahan-alat'));
}

}
