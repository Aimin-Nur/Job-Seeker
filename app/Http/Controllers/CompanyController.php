<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\DB;
use App\Models\ModelAdmin;
use App\Models\modelJob;
use App\Models\User;
use App\Models\ModelTamu;
use App\Models\ModelApply;
use App\Models\ModelCompany;
use Illuminate\Support\Facades\Validator;
use Illuminate\Support\Facades\File;
use Illuminate\Http\UploadedFile;
use App\Mail\Interview;
use Illuminate\Support\Facades\Mail;

class CompanyController extends Controller
{

    public function index()
    {
        $adminCompany = Auth::user();
        $adminCompanyId = $adminCompany->id_company;
        $company = DB::table('company')->where('id_company', $adminCompanyId)->first();
        return view('companyPage.profileCompany.profile', compact('company'));
    }


    public function listJobCompany()
    {
        $adminCompany = Auth::user();
        $adminCompanyId = $adminCompany->id_company;
        $company = DB::table('company')->where('id_company', $adminCompanyId)->first();
        $nameCompany = Auth::user();
        $getName = $nameCompany->nama_company;
        $listJobCompany = DB::table('job')->where('nama_company', $getName)->get();
        $sumApply = DB::table('job')->where('nama_company', $getName)->count();

        return view('companyPage.profileCompany.joblist', compact('listJobCompany', 'company', 'sumApply'));
    }


    public function kandidat()
    {
        $adminCompany = Auth::user();
        $adminCompanyId = $adminCompany->id_company;
        $company = DB::table('company')->where('id_company', $adminCompanyId)->first();

        $getKandidat = ModelApply::with(['user', 'job'])->where('id_company', $adminCompanyId)->get();
        $countKandidat = ModelApply::with(['user', 'job'])->where('id_company', $adminCompanyId)->count();
        return view('companyPage.profileCompany.kandidat', compact('company', 'getKandidat','countKandidat'));
    }


    public function detailKandidat($id)
    {
        $applicants = ModelApply::with(['user', 'job'])->get();
        $applicant = DB::table('apply')->where('id_user', $id)->first();
        $profilKandidat = DB::table('users')->where('id', $id)->first();
        return view ('companyPage.profileCompany.detailKandidat', compact('profilKandidat','applicant', 'applicants'));
    }


    public function infoInterview($id, Request $request)
    {
        $interview = ModelApply::find($id);

        if (!$interview) {
            return redirect('/apply')->with('gagal', 'Data Interview tidak ditemukan!');
        }

        // Update nilai tgl_interview dan jam_interview
        $interview->tgl_interview = $request->input('field_tgl');
        $interview->jam_interview = $request->input('field_waktu');

        // Simpan perubahan ke database
        $interview->save();

        // Kirim email
        $mailPelamar = $request->input('field_email');
        try {
            Mail::to($mailPelamar)->send(new Interview($interview));
        } catch (\Swift_TransportException $e) {
            // Terjadi kesalahan pengiriman email
            return view('companyPage.profileCompany.gagalInterview');
        }

        return view('companyPage.profileCompany.suksesInterview');
    }

    public function gagal(){
        return view('companyPage.profileCompany.suksesInterview');
    }



}
