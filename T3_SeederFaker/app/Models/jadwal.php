<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Jadwal extends Model
{
    protected $fillable = [
        'kode_matakuliah', 'nidn', 'kelas', 'hari', 'jam'
    ];
}
