<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class ModelPendidikan extends Model
{
    public $timestamps = false;
    protected $table = 'pendidikan';
    protected $primaryKey = 'id';
    protected $fillable = [
        'NIK',
        'instansi',
        'jurusan',
        'lokasi',
        'tahun_masuk',
        'tahun_lulus',
        'ipk'
    ];



}
