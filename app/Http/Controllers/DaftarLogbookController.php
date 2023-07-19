<?php

namespace App\Http\Controllers;

use App\Models\Logbook;
use App\Models\Mahasiswa;
use Illuminate\Http\Request;

class DaftarLogbookController extends Controller
{
     function viewDaftarLogbook(Request $request)
    {
        $daftarLogbook = Logbook::with(["mahasiswa"=>function($query){
            return $query->with("dosen");
            }])->get();;
        // dd($daftarLogbook);
        return view('dosen.daftarLogbook',['daftarLogbook'=> $daftarLogbook]);

        // // ambil data logbook
        // $logbook = Logbook::where('nip_dospem', $request->user()->username)->where('status', 'pengajuan')
        //     ->with(['logbook' => function ($query) {
        //         $query->with('mahasiswa');
        //     }])->get();


        // // ambil data mahasiswa bimbingan dari table skripsi
        // $mahasiswaBimbingan = Skripsi::where('nip_dospem', $request->user()->username)->with('mahasiswa')->get();

        // // dd($pengajuan_judul);
        // // mengembalikan view dengan data
        // // dd($mahasiswaBimbingan);
        // return view('dosen.daftarMahasiswa')->with('pengajuanDospem', $pengajuanDospem)->with('mahasiswaBimbingan', $mahasiswaBimbingan);
    }
}
