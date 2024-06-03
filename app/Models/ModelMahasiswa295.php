<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class ModelMahasiswa295 extends Model
{
    use HasFactory;

    protected $table = 'tb_mahasiswa295';

    protected $fillable = [
        'nama',
        'nim',
        'email',
        'gender',
        'alamat',
    ];
}
