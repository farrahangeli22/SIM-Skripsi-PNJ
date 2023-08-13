<?php

namespace App\Http\Controllers;

use App\Models\Dosen;
use App\Models\Mahasiswa;
use App\Models\PengajuanSidang;
use Carbon\Carbon;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Session;

class PengajuanSidangController extends Controller
{
      // function buat return view pengajuan sidang
    function viewPengajuanSidang(Request $request)
     {
        // ambil data mahasiswa dari db
        // where nim == username authenticated user
        $mahasiswa = Mahasiswa::where('nim', $request->user()->username)->first();
        // ambil data dosen dari db
        $dosen = Dosen::all();
        // mengembalikan view dengan data
        return view('user.pengajuanSidang')->with('mahasiswa', $mahasiswa)->with('dosen', $dosen);
    }
     // create pengajuan sidang
    function createPengajuanSidang(Request $request)
    {
        // create reccord on table pengajuan sidang
        
        $pengajuanSidang = PengajuanSidang::create([
            'nim' => $request->user()->username,
            'judul' => $request->judul,
            'sub_judul' => isset($request->subJudul) ? $request->subJudul : null,
            'anggota' => isset($request->anggota) ? $request->anggota : null,
        ]);

         Mahasiswa::find($request->user()->username)->update([
            'status_id' => '5',
        ]);
        
        Session::flash('message', 'Pengajuan sidang berhasil terkirim');
        return redirect(route('user.pengajuan-sidang'));
    } 

    function getApi($id){
        $pengajuanSidang = PengajuanSidang::find($id);
        $mahasiswa = Mahasiswa::where("nim",$pengajuanSidang->nim)->first();
        $data = [
            "nim"=>$mahasiswa->nim,
            "nama"=>$mahasiswa->nama,
            "prodi"=>$mahasiswa->prodi,
            "kelas"=>$mahasiswa->kelas,
            "namaDosen"=>$pengajuanSidang->mahasiswa->dosen->nama,
            "judul"=>$pengajuanSidang->judul,
            "subJudul"=>$pengajuanSidang->sub_judul,
            "dosenPenguji" => [
                $pengajuanSidang->dosenPenguji1 ? $pengajuanSidang->dosenPenguji1->nip:"",
                $pengajuanSidang->dosenPenguji2 ? $pengajuanSidang->dosenPenguji2->nip:"",
                $pengajuanSidang->dosenPenguji3 ? $pengajuanSidang->dosenPenguji3->nip:"",
            ],
            "jadwalSidang" => Carbon::parse($pengajuanSidang->jadwal_sidang)->format("Y-m-d h:m"),
            "ruang" => $pengajuanSidang->ruang,
            "nilai" => $pengajuanSidang->hasilSidang ? $pengajuanSidang->hasilSidang->nilai:"",
            "status" => $pengajuanSidang->hasilSidang ? $pengajuanSidang->hasilSidang->status:"",
        ];
        return response($data,200);
    }
}