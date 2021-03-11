<?php

namespace App\Http\Controllers;
use Illuminate\Support\Facades\DB;
use App\Models\Supplier;
use Illuminate\Http\Request;

class SupplierController extends Controller
{
    public function supplier(){
        $supplier = DB::table('suppliers')->paginate(4);
        return view ('services', ['supplier' => $supplier]);
    }
}
