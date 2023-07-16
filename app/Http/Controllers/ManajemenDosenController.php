<?php

namespace App\Http\Controllers;

use App\Models\Dosen;
use App\Models\UserRole;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class ManajemenDosenController extends Controller
{
    function viewManajemenDosen(Request $request)
    {
        // // ambil data dosen bimbingan dari table dosen
        // $daftarDosen = Dosen->get();

        // // mengembalikan view dengan data
        // // dd($daftarDosen);
        // return view('admin.manajemenDosen')->with('daftarDosen', $daftarDosen);
    }
}
