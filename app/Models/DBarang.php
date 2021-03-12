<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class DBarang extends Model
{
    use HasFactory;

    public static function barang(){
        return DBarang::paginate(5);
    }
}
