<?php

namespace App\Http\Controllers;
use Illuminate\Support\Facades\DB;
use App\Models\Pegawai;
use Illuminate\Http\Request;

class PegawaiController extends Controller
{
    public function pegawai(){
        $pegawai = Pegawai::all();
        return view ('company', ['pegawai' => $pegawai]);
    }
}
