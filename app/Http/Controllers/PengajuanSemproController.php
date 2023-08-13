<?php

namespace App\Http\Controllers;

use App\Models\Dosen;
use App\Models\Mahasiswa;
use App\Models\PengajuanSempro;
use Carbon\Carbon;
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
        // create reccord on table pengajuan sempro
        $pengajuanSempro = PengajuanSempro::create([
            'nim' => $request->user()->username,
            'judul' => $request->judul,
            'sub_judul' => isset($request->subJudul) ? $request->subJudul : null,
            'anggota' => isset($request->anggota) ? $request->anggota : null,
        ]);

        Mahasiswa::find($request->user()->username)->update([
            'status_id' => '2',
        ]);

        Session::flash('message', 'Pengajuan sempro berhasil terkirim');
        return redirect(route('user.pengajuan-sempro'));
    }

    function getApi($id)
    {
        $pengajuanSempro = PengajuanSempro::find($id);
        $mahasiswa = Mahasiswa::where("nim", $pengajuanSempro->nim)->first();
        $data = [
            "nim" => $mahasiswa->nim,
            "nama" => $mahasiswa->nama,
            "prodi" => $mahasiswa->prodi,
            "kelas" => $mahasiswa->kelas,
            "namaDosen" => $pengajuanSempro->mahasiswa->dosen->nama,
            "judul" => $pengajuanSempro->judul,
            "subJudul" => $pengajuanSempro->sub_judul,
            "dosenPenguji" => [
                $pengajuanSempro->dosenPenguji1 ? $pengajuanSempro->dosenPenguji1->nip:"",
                $pengajuanSempro->dosenPenguji2 ? $pengajuanSempro->dosenPenguji2->nip:"",
                $pengajuanSempro->dosenPenguji3 ? $pengajuanSempro->dosenPenguji3->nip:"",
            ],
            "jadwalSempro" => Carbon::parse($pengajuanSempro->jadwal_sempro)->format("Y-m-d h:m"),
            "ruang" => $pengajuanSempro->ruang,
            "nilaiPembimbing" => $pengajuanSempro->nilai_pembimbing,
            "nilai" => $pengajuanSempro->hasilSempro? $pengajuanSempro->hasilSempro->nilai:"",
            "status" => $pengajuanSempro->hasilSempro? $pengajuanSempro->hasilSempro->status:"",
            ];
        return response($data, 200);
    }
}
