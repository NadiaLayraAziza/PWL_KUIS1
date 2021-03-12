<?php

namespace App\Http\Controllers;

use App\Models\DPelanggan;
use Illuminate\Http\Request;

class DPelangganController extends Controller
{
    public function pelanggan(){
        return view ('pelanggan', ['pelanggan' => DPelanggan::pelanggan()]);
    }
}
