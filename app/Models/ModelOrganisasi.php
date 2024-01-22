<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class ModelOrganisasi extends Model
{
    public $timestamps = false;
    protected $table = 'organisasi';
    protected $primaryKey = 'id';
    protected $fillable = [
        'NIK',
        'nama_organisasi',
        'jabatan',
        'masa_kepengurusan',
        'deskripsi',
    ];



}
