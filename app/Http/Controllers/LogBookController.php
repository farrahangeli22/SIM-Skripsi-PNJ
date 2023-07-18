<?php

namespace App\Http\Controllers;

use App\Models\Dosen;
use App\Models\Logbook;
use App\Models\Skripsi;
use Illuminate\Http\Request;
use Auth;

class LogBookController extends Controller
{
    //
    function viewLogBookMahasiswa(Request $request)
    {
       $logbook = Logbook::where("nim",Auth::user()->username)->get();
        return view('user.logbook', [
            'logbook' => $logbook
        ]);
    }
}
