<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class ModelAkademik296 extends Model
{
    use HasFactory;

    protected $table = 'tb_akademik296';

    protected $fillable = [
        'prodi',
        'angkatan',
        'semester',
        'jumlah_mk',
        'ipk',
        'kelas',
        'dospem'
    ];
}

