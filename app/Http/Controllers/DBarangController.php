<?php

namespace App\Http\Controllers;

use App\Models\DBarang;
use Illuminate\Http\Request;

class DBarangController extends Controller
{
    public function barang(){
        return view ('barang', ['barang' => DBarang::barang()]);
    }
}
