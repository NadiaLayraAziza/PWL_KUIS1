<?php

namespace App\Http\Controllers;
use Illuminate\Support\Facades\DB;

use App\Models\Barang;
use App\Models\Pelanggan;
use Illuminate\Http\Request;

class BarangController extends Controller
{
    public function barang(){
        $barang = DB::table('barangs')->paginate(4);
        $pelanggan = Pelanggan::all();
        return view ('index', ['barang' => $barang, 'pelanggan' => $pelanggan]);
    }

}
