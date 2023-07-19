<?php

namespace App\Http\Controllers;

use App\Models\Dosen;
use App\Models\Mahasiswa;
use App\Models\PengajuanSempro;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Session;

class PengajuanSemproController extends Controller
{
    // function buat return view pengajuan sempro
    function viewPengajuanSempro(Request $request)
    {
        // ambil data mahasiswa dari db
        // where nim == username authenticated user
        $mahasiswa = Mahasiswa::where('nim', $request->user()->username)->first();
        // ambil data dosen dari db
        $dosen = Dosen::all();
        // mengembalikan view dengan data
        return view('user.pengajuanSempro')->with('mahasiswa', $mahasiswa)->with('dosen', $dosen);
    }
    
    // create pengajuan sempro
    function createPengajuanSempro(Request $request)
    {
        // store uploaded file into storage
        $path = $request->file('file_f1')->store('/file_f1');
        // create reccord on table pengajuan sempro
        $pengajuanSempro = PengajuanSempro::create([
            'nim' => $request->user()->username,
            'judul' => $request->judul,
            'sub_judul' => isset($request->subJudul) ? $request->subJudul : null,
            'anggota' => isset($request->anggota) ? $request->anggota : null,
            'file_f1' => $path,
        ]);
             
        Session::flash('message', 'Pengajuan sempro berhasil terkirim');
        return redirect(route('user.pengajuan-sempro'));
    } 

    function getApi($id){
        $pengajuanSempro = PengajuanSempro::find($id);
        $mahasiswa = Mahasiswa::where("nim",$pengajuanSempro->nim)->first();
        $data = ["nim"=>$mahasiswa->nim,"nama"=>$mahasiswa->nama,"namaDosen"=>$pengajuanSempro->mahasiswa->dosen->nama];
        return response($data,200);
    }
     
}
