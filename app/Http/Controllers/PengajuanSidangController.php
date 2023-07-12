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
        // create reccord on table pengajuan judul
        $pengajuanSidang = PengajuanSidang::create([
            'nim' => $request->user()->username,
            'judul' => $request->judul,
            'sub_judul' => isset($request->subJudul) ? $request->subJudul : null,
            'anggota' => isset($request->anggota) ? $request->anggota : null,
            'file_f4' => $path,
        ]);
        
        Session::flash('message', 'Pengajuan sidang berhasil terkirim');
        return redirect(route('user.pengajuan-sidang'));
    } 
}