<?php

namespace App\Http\Controllers;
use Illuminate\Support\Facades\DB;

use App\Models\Barang;
use Illuminate\Http\Request;

class BarangController extends Controller
{
    public function barang(){
        $barang = DB::table('barangs')->paginate(4);
        return view ('index', ['barang' => $barang]);
    }

    public function pelanggan(){
        $pelanggan = DB::table('pelanggans');
        return view ('index', ['pelanggan' => $pelanggan]);
    }

}
