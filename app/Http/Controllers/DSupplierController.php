<?php

namespace App\Http\Controllers;
use App\Models\DSupplier;
use Illuminate\Http\Request;

class DSupplierController extends Controller
{
    public function supplier(){
        return view ('supplier', ['supplier' => DSupplier::supplier()]);
    }
}
