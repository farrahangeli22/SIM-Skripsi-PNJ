<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class FormLogbookController extends Controller
{
    function createFormLogbook(Request $request)
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
        
        Session::flash('message', 'Pengajuan sidang berhasil terkirim');
        return redirect(route('user.pengajuan-sidang'));
    }
}
