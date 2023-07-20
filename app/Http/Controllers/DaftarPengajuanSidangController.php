<?php

namespace App\Http\Controllers;

use App\Models\Dosen;
use App\Models\HasilSidang;
use App\Models\PengajuanSidang;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Session;

class DaftarPengajuanSidangController extends Controller
{
    function viewDaftarPengajuanSidang(Request $request)
    {
        $daftarPengajuanSidang = PengajuanSidang::with(["mahasiswa"=>function($query){
            return $query->with("dosen");
            }])->get();;

            $dosen = Dosen::get();
        
        return view('admin.daftarPengajuanSidang',['daftarPengajuanSidang'=> $daftarPengajuanSidang, 'dosen'=> $dosen]);
    }
    function createDaftarPengajuanSidang(Request $request)
{
    $pengajuanSidang = PengajuanSidang::updateOrCreate(
        ['nim' => $request->nim],
        [
            'nim' => $request->nim,
            'dosen_penguji1' => $request->dosen1,
            'dosen_penguji2' => $request->dosen2,
            'dosen_penguji3' => $request->dosen3,
        ]
    );

    if ($request->hasFile('f5')) {
        $path = $request->file('f5')->store('/file_f5');
        HasilSidang::updateOrCreate(
            ['pengajuan_sidang_id' => $pengajuanSidang->id],
            [
                'pengajuan_sidang_id' => $pengajuanSidang->id,
                'file_f5' => $path,
                'status' => "pengajuan",
            ]
        );
    } elseif ($request->hasFile('f7')) {
        $path = $request->file('f7')->store('/file_f7');
        HasilSidang::updateOrCreate(
            ['pengajuan_sidang_id' => $pengajuanSidang->id],
            [
                'pengajuan_sidang_id' => $pengajuanSidang->id,
                'file_f7' => $path,
                'status' => "pengajuan",
            ]
        );
    } elseif ($request->hasFile('f8')) {
        $path = $request->file('f8')->store('/file_f8');
        HasilSidang::updateOrCreate(
            ['pengajuan_sidang_id' => $pengajuanSidang->id],
            [
                'pengajuan_sidang_id' => $pengajuanSidang->id,
                'file_f8' => $path,
                'status' => "pengajuan",
            ]
        );
    } elseif ($request->hasFile('f9')) {
        $path = $request->file('f9')->store('/file_f9');
        HasilSidang::updateOrCreate(
            ['pengajuan_sidang_id' => $pengajuanSidang->id],
            [
                'pengajuan_sidang_id' => $pengajuanSidang->id,
                'file_f9' => $path,
                'status' => "pengajuan",
            ]
        );
    }
        
        Session::flash('message', 'Pengajuan sidang berhasil terkirim');
        return redirect(route('admin.daftar-pengajuan-sidang'));
    }

}