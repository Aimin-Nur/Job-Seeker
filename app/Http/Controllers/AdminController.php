<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;
use Illuminate\Support\Facades\DB;
use App\Models\User;
use Illuminate\Support\Facades\Validator;

class AdminController extends Controller
{
    public function dashboard(){
        $isActive = request()->is('dashboardAdmin') ? 'active' : '';
        return view ('adminPage.dashboard', compact('isActive'));
    }
}
