<?php

namespace App\Http\Controllers;

use App\Models\Dosen;
use App\Models\Mahasiswa;
use App\Models\PengajuanSempro;
use App\Models\HasilSempro;
use App\Models\PengajuanSidang;
use App\Models\HasilSidang;
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
        dd("tet");
        // store uploaded file into storage
       


        Session::flash('message', 'File penilaian berhasil terkirim');
        return redirect(route('dosen.detail-mahasiswa', ['id'=>$id]));
    } 

     function createDetailSidang(Request $request,$id)
    {
        if($request->has('nilai_sempro')){
            $nilai = $request->nilai_sempro;
            // dd($nilai);
            // create reccord on table hasil sempro
            $pengajuanSempro = PengajuanSempro::where("nim",$id)->orderBy("id","DESC")->first()->update([
                'nilai_pembimbing' => $nilai
            ]); 
        }

        elseif($request->has('nilai_skripsi')){
            $nilai = $request->nilai_skripsi;
            // create reccord on table hasil sidang
            $pengajuanSidang = PengajuanSidang::where("nim",$id)->orderBy("id","DESC")->first()->update([
                'nilai_pembimbing' => $nilai
            ]);
        }
        
        Session::flash('message', 'File penilaian berhasil terkirim');
        return redirect(route('dosen.detail-mahasiswa', ['id'=>$id]));
    } 
}
