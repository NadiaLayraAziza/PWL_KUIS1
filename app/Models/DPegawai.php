<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class DPegawai extends Model
{
    use HasFactory;

    public static function pegawai(){
        return DPegawai::paginate(5);
    }
}
