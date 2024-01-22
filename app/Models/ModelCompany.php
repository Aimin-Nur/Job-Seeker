<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Auth\Authenticatable;
;
class ModelCompany extends Model implements \Illuminate\Contracts\Auth\Authenticatable
{
    use Authenticatable;
    use HasFactory;

    protected $table = 'company';
    protected $primaryKey = 'id_company';
    protected $fillable = [
        'nama_company',
        'password',
    ];

    // public function isAdmin()
    // {
    //     return true;
    // }

    // public function home()
    // {
    //     return '/dashboardAdmin';
    // }

}
