<?php

namespace App\Http\Controllers;

use App\Models\Konten;
use Illuminate\Http\Request;

class KontenController extends Controller
{
    function viewKonten(Request $request)
    {
        $daftarKonten = Konten::get();
        // mengembalikan view dengan data
        // dd($daftarDosen);
      
        return view('admin.Konten',['daftarKonten'=> $daftarKonten]);
    }
}
