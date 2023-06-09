<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Konsul extends Model
{
    use HasFactory;

        protected $fillable = [
            'id_konsul',
            'no_ktp',
            'no_antrian',
            'catatan_konsul',
        ];

}
