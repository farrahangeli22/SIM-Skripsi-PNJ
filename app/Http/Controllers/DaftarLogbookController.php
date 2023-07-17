<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class DaftarLogbookController extends Controller
{
     function viewDaftarMahasiswa(Request $request)
    {
        // ambil data logbook
        $logbook = Logbook::where('nip_dospem', $request->user()->username)->where('status', 'pengajuan')
            ->with(['logbook' => function ($query) {
                $query->with('mahasiswa');
            }])->get();


        // ambil data mahasiswa bimbingan dari table skripsi
        $mahasiswaBimbingan = Skripsi::where('nip_dospem', $request->user()->username)->with('mahasiswa')->get();

        // dd($pengajuan_judul);
        // mengembalikan view dengan data
        // dd($mahasiswaBimbingan);
        return view('dosen.daftarMahasiswa')->with('pengajuanDospem', $pengajuanDospem)->with('mahasiswaBimbingan', $mahasiswaBimbingan);
    }
}
