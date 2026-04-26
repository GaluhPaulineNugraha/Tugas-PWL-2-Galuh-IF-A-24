<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use App\Models\Mahasiswa;
use App\Models\Matakuliah;

class Krs extends Model
{
    protected $table = 'krs';

    protected $fillable = ['npm', 'kode_matakuliah'];

    public function mahasiswa()
    {
        return $this->belongsTo(Mahasiswa::class, 'npm');
    }

    public function matakuliah()
    {
        return $this->belongsTo(Matakuliah::class, 'kode_matakuliah');
    }
}