<?php

namespace App\Http\Controllers;

use App\Models\Dosen;
use App\Models\Mahasiswa;
use App\Models\PengajuanSempro;
use App\Models\Skripsi;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Session;

class DetailMahasiswaController extends Controller
{
     // function buat return view pengajuan sidang
    function viewDetailMahasiswa(Request $request, $id )
     {
        // ambil data mahasiswa dari db
        // where nim == username authenticated user
        $mahasiswa = Mahasiswa::where('nim', $id)->first();
        // dd($mahasiswa);
        // $skripsi = Skripsi::where('judul', $request->user()->username)->first();
        // ambil data dosen dari db
        $dosen = Dosen::all();
        $sempro = PengajuanSempro::where("nim",$id)->get()->count();
        // mengembalikan view dengan data
        return view('dosen.detailMahasiswa')->with('mahasiswa', $mahasiswa)->with('dosen', $dosen)->with('sempro', $sempro);
    }

     function createDetailSempro(Request $request,$id)
    {
        // store uploaded file into storage
        $path = $request->file('file_f2')->store('/file_f2');
        // dd($request);
        // create reccord on table pengajuan sidang
        $pengajuanSempro = PengajuanSempro::where("nim",$id)->orderBy("id","DESC")->first()->update([
            'file_f2' => $path,
        ]);

        Session::flash('message', 'File penilaian berhasil terkirim');
        return redirect(route('dosen.detail-mahasiswa'));
    } 

     function createDetailSidang(Request $request )
    {
        // store uploaded file into storage
        $path = $request->file('file_f6')->store('/file_f6');
        // create reccord on table pengajuan sidang
        $pengajuanSidang = PengajuanSidang::create([
            'file_f6' => $path,
        ]);
        
        Session::flash('message', 'File penilaian berhasil terkirim');
        return redirect(route('dosen.detail-mahasiswa'));
    } 
}
