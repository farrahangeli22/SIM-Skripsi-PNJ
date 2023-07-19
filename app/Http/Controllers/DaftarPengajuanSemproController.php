<?php

namespace App\Http\Controllers;

use App\Models\Dosen;
use App\Models\HasilSempro;
use App\Models\PengajuanSempro;
use Illuminate\Support\Facades\Session;
use Illuminate\Http\Request;

class DaftarPengajuanSemproController extends Controller
{
    function viewDaftarPengajuanSempro(Request $request)
    {
        $daftarPengajuanSempro = PengajuanSempro::with(["mahasiswa"=>function($query){
            return $query->with("dosen");
            }])->get();;

        $dosen = Dosen::get();
        // dd($daftarPengajuanSempro);
        return view('admin.daftarPengajuanSempro',['daftarPengajuanSempro'=> $daftarPengajuanSempro,'dosen'=> $dosen]);
    }
    function createDaftarPengajuanSempro(Request $request)
    {
        // store uploaded file into storage
        // create reccord on table pengajuan sempro
        $pengajuanSempro = PengajuanSempro::updateOrCreate([
            'nim'=>$request->nim,
        ],[
            'nim'=>$request->nim,
            'dosen_penguji1' => $request->dosen1,
            'dosen_penguji2' => $request->dosen2,
            'dosen_penguji3' => $request->dosen3,
        ]);

        if($request->f3){
            $path = $request->file('f3')->store('/file_f3');
            HasilSempro::updateOrCreate([
                'id' => $pengajuanSempro->id
            ],[
                'pengajuan_sempro_id' => $pengajuanSempro->id,
                'file_f3' => $path,
                'status' => "pengajuan",
            ]);
        }
             
        Session::flash('message', 'Pengajuan sempro berhasil terkirim');
        return redirect(route('admin.daftar-pengajuan-sempro'));
    } 
}
