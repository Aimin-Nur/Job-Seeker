<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class ModelSoft extends Model
{
    public $timestamps = false;
    protected $table = 'soft_skill';
    protected $primaryKey = 'id';
    protected $fillable = [
        'id',
        'NIK',
        'soft_skill',
    ];



}
