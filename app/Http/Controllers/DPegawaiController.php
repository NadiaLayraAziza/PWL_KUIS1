<?php

namespace App\Http\Controllers;
use App\Models\DPegawai;
use Illuminate\Http\Request;

class DPegawaiController extends Controller
{
    public function pegawai(){
        return view ('pegawai', ['pegawai' => DPegawai::pegawai()]);
    }
}
