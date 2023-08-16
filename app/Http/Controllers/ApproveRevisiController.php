<?php

namespace App\Http\Controllers;

use App\Models\Dosen;
use App\Models\Mahasiswa;
use App\Models\revisi;
use Auth;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Session;

class ApproveRevisiController extends Controller
{

public function viewApproveRevisi()
{
    $mahasiswa = Mahasiswa::where('nim', Auth::user()->username)->first();
    $detailRevisiSkripsi = Revisi::where('nim', Auth::user()->username)->first();
    return view('penguji.approveRevisi')->with('detailRevisiSkripsi', $detailRevisiSkripsi)->with('mahasiswa', $mahasiswa);
}
function updateApproveRevisi(Request $request, $id)
    {
        Revisi::find($id)->update([
            "feedback"=>$request->feedback,
            "status"=>$request->status,
        ]);

        Session::flash('message', 'Persetujuan revisi berhasil diupdate');
        return redirect(route('penguji.approve-revisi'));
    }
}