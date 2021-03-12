<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class DPelanggan extends Model
{
    use HasFactory;

    public static function pelanggan(){
        return DPelanggan::paginate(5);
    }
}
