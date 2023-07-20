<?php

namespace App\Http\Controllers;

use App\Models\Dosen;
use App\Models\Mahasiswa;
use Illuminate\Http\Request;

class DashboardController extends Controller
{
    function viewDashboard(Request $request){
        $dataMahasiswa = Mahasiswa::get();

        return view('admin.dashboardAdmin', compact('dataMahasiswa'));
    }


    function viewDashboardFilter(Request $request)
    {
        // if($request->status == 'pengajuanJudul'){
        //     $dataMahasiswa = Mahasiswa::where('status_id', '1')->get();
        // }elseif($request->status == 'pengajuanSempro') {
        //     $dataMahasiswa = Mahasiswa::where('status_id', '2')->get();
        // }elseif($request->status == 'lulusSempro') {
        //     $dataMahasiswa = Mahasiswa::where('status_id', '3')->get();
        // }elseif($request->status == 'tidakLulusSempro') {
        //     $dataMahasiswa = Mahasiswa::where('status_id', '4')->get();
        // }elseif($request->status == 'pengajuanSidang') {
        //     $dataMahasiswa = Mahasiswa::where('status_id', '5')->get();
        // }elseif($request->status == 'lulusSidang') {
        //     $dataMahasiswa = Mahasiswa::where('status_id', '6')->get();
        // }elseif($request->status == 'tidakLulusSidang') {
        //     $dataMahasiswa = Mahasiswa::where('status_id', '7')->get();
        // }else {
        //     $dataMahasiswa = Mahasiswa::where('status_id', '8')->get();
        // }

    
        // return view('admin.dashboardAdmin')->with('dataMahasiswa', $dataMahasiswa);

        $dataMahasiswa = [];
        if ($request->status == 'pengajuanJudul') {
            $dataMahasiswa = Mahasiswa::where('status_id', '1')->get();
        } elseif ($request->status == 'pengajuanSempro') {
            $dataMahasiswa = Mahasiswa::where('status_id', '2')->get();
        } elseif ($request->status == 'lulusSempro') {
            $dataMahasiswa = Mahasiswa::where('status_id', '3')->get();
        } elseif ($request->status == 'tidakLulusSempro') {
            $dataMahasiswa = Mahasiswa::where('status_id', '4')->get();
        } elseif ($request->status == 'pengajuanSidang') {
            $dataMahasiswa = Mahasiswa::where('status_id', '5')->get();
        } elseif ($request->status == 'lulusSidang') {
            $dataMahasiswa = Mahasiswa::where('status_id', '6')->get();
        } elseif ($request->status == 'tidakLulusSidang') {
            $dataMahasiswa = Mahasiswa::where('status_id', '7')->get();
        } else {
            $dataMahasiswa = Mahasiswa::where('status_id', '8')->get();
        }

        return view('admin.dashboardAdmin')->with(['dataMahasiswa' => $dataMahasiswa, 'request' => $request]);
    }
}
