<?php

namespace App\Http\Controllers;

use App\Models\Dosen;
use App\Models\Mahasiswa;
use App\Models\PenyerahanAlat;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Session;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Storage;

class PenyerahanAlatController extends Controller
{
    // function buat return view pengajuan sidang
    public function viewPenyerahanAlat(Request $request)
    {
        // ambil data mahasiswa dari db
        // where nim == username authenticated user
        $mahasiswa = Mahasiswa::where('nim', Auth::user()->username)->first();
        // ambil data dosen dari db
        $dosen = Dosen::all();
        // mengembalikan view dengan data
        return view('user.penyerahanAlat', compact('mahasiswa', 'dosen'));
    }

    function createPenyerahanAlat(Request $request)
    {
      
        // store uploaded file into storage
        $pathPkkp = $request->file('sertifikat_pkkp')->store('/sertifikat_pkkp4');
        $pathLomba = $request->file('sertifikat_lomba')->store('/sertifikat_lomba');
        $pathKejuaraan = $request->hasFile('sertifikat_kejuaraan') ? $request->file('sertifikat_kejuaraan')->store('/sertifikat_kejuaraan') : null;
        $pathToeic = $request->file('sertifikat_toeic')->store('/sertifikat_toeic');
        $pathF10 = $request->file('file_f10')->store('/file_f10');
        $pathF12 = $request->file('file_f12')->store('/file_f12');
        $pathF13 = $request->file('file_f13')->store('/file_f13');
        $pathF14 = $request->file('file_f14')->store('/file_f14');
        $pathF15 = $request->file('file_f15')->store('/file_f15');
        $pathF16 = $request->file('file_f16')->store('/file_f16');
        $pathOrganisasi = $request->hasFile('sertifikat_organisasi') ? $request->file('sertifikat_organisasi')->store('/sertifikat_organisasi') : null;
        // create reccord on table pengajuan sidang
        $penyerahanAlat = PenyerahanAlat::create([
        'nim' => $request->user()->username,
        'judul' => $request->judul,
        'sub_judul' => isset($request->subJudul) ? $request->subJudul : null,
        'anggota' => isset($request->anggota) ? $request->anggota : null,
        "link_video" => $request->link_video,
        'sertifikat_pkkp' => $pathPkkp,
        'sertifikat_lomba' => $pathLomba,
        'sertifikat_kejuaraan' => $pathKejuaraan,
        'sertifikat_toeic' => $pathToeic,
        'file_f10' => $pathF10,
        'file_f12' => $pathF12,
        'file_f13' => $pathF13,
        'file_f14' => $pathF14,
        'file_f15' => $pathF15,
        'file_f16' => $pathF16,
        'sertifikat_organisasi' => $pathOrganisasi,
    ]);
        

    Session::flash('message', 'Penyerahan Alat berhasil terkirim');
    return redirect(route('user.penyerahan-alat'));
}  
}
