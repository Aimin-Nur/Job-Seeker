<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class ModelSertifikasi extends Model
{
    public $timestamps = false;
    protected $table = 'sertifikasi';
    protected $primaryKey = 'id';
    protected $fillable = [
        'NIK',
        'lembaga_sertifikasi',
        'bidang_sertifikasi',
        'tanggal_sertifikasi',
    ];



}
