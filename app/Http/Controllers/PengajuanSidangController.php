<?php

namespace App\Http\Controllers;

use App\Models\Dosen;
use App\Models\Mahasiswa;
use App\Models\PengajuanSidang;
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
        // store uploaded file into storage
        $path = $request->file('file_f4')->store('/file_f4');
        // create reccord on table pengajuan sidang
        
        $pengajuanSidang = PengajuanSidang::create([
            'nim' => $request->user()->username,
            'judul' => $request->judul,
            'sub_judul' => isset($request->subJudul) ? $request->subJudul : null,
            'anggota' => isset($request->anggota) ? $request->anggota : null,
            'file_f4' => $path,
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
        $data = ["nim"=>$mahasiswa->nim,"nama"=>$mahasiswa->nama,"prodi"=>$mahasiswa->prodi,"kelas"=>$mahasiswa->kelas,"namaDosen"=>$pengajuanSidang->mahasiswa->dosen->nama,"judul"=>$pengajuanSidang->judul,"subJudul"=>$pengajuanSidang->sub_judul];
        return response($data,200);
    }
}