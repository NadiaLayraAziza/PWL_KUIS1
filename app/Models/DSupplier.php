<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class DSupplier extends Model
{
    use HasFactory;

    public static function supplier(){
        return DSupplier::paginate(3);
    }
}
