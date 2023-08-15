<?php

namespace App\Http\Controllers;

use App\Models\Dosen;
use App\Models\Mahasiswa;
use App\Models\RevisiProposal;
use Auth;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Session;

class RevisiProposalController extends Controller
{

public function viewRevisiProposal()
{
    $mahasiswa = Mahasiswa::where('nim', Auth::user()->username)->first();

        // ambil data dosen dari db
        $dosen = Dosen::all();

    $daftarRevisiProposal = RevisiProposal::all(); // Ganti dengan query yang sesuai untuk mengambil data revisi proposal
    return view('user.daftarRevisiProposal', ['daftarRevisiProposal' => $daftarRevisiProposal]);
}
}
