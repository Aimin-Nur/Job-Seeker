<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class ModelHard extends Model
{
    public $timestamps = false;
    protected $table = 'hard_skill';
    protected $primaryKey = 'id';
    protected $fillable = [
        'NIK',
        'hard_skill',
    ];



}
