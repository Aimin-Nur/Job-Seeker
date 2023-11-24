<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;
use Illuminate\Support\Facades\DB;
use App\Models\modelJob;

class ControllerJob extends Controller
{
    public function index(){
        // $isActive = request()->is('dataKaryawan') ? 'active' : '';
        $listJob = DB::table('job')->get();
        return view('landingPage.index', compact('listJob'));
    }


    public function listJob(){
        // $isActive = request()->is('dataKaryawan') ? 'active' : '';
        $sumOfjob = DB::table('job')->count();
        $listJob = DB::table('job')->get();
        return view('landingPage.job', compact('listJob', 'sumOfjob'));
    }

    public function detailJob($id)
    {
        // Mengambil detail job berdasarkan id
        $jobDetail = modelJob::where('id', $id)->first();
        if (!$jobDetail) {
            abort(404);
        }

        $hardSkills = explode(',', $jobDetail->hard_skill);
        $softSkills = explode('-', $jobDetail->soft_skill);

        // Mengirim data ke halaman
        return view('landingPage.detailJob', compact('jobDetail', 'hardSkills', 'softSkills'));
    }


    public function profil($id)
    {
        return view('landingPage.profil');
    }




}
