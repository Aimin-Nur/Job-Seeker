<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ControllerJob;
use App\Http\Controllers\AuthController;
use App\Http\Controllers\AdminController;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

// Route Landing Page
Route::get('/', function () {
    return view('landingPage.index');
});

Route::get('/job', [ControllerJob::class, 'listJob']);
Route::get('/detailJob/{id}', [ControllerJob::class, 'detailJob']);


Route::middleware(['guest:user'])->group(function () {
    // Rute-rute yang hanya dapat diakses oleh tamu
    Route::get('/login', function () {
        return view('landingPage.login');
    })->name('login');

    Route::post('/LoginUser', [AuthController::class, 'LoginUser']);
});

// Rute untuk logout, dapat diakses oleh semua pengguna (tanpa middleware)
Route::get('/LogoutUser', [AuthController::class, 'LogoutUser']);


Route::get('/profil', function () {
    return view('landingPage.profil');
});

// Rute Auth Admin
Route::middleware(['auth:admin'])->group(function (){
    Route::get('/dashboardAdmin', [AdminController::class, 'dashboard']);
    Route::get('/dataKaryawan', [AdminController::class, 'dataKaryawan']);
    Route::get('/LogoutAdmin', [AuthController::class, 'LogoutAdmin']);
    Route::post('/addKaryawan', [AdminController::class, 'addKaryawan']);
    Route::post('/editKaryawan/{NIP}', [AdminController::class, 'editKaryawan']);
    Route::post('/deleteKaryawan/{NIP}', [AdminController::class, 'deleteKaryawan']);
});

Route::get('/adminDash', function () {
    return view('adminPage.dashboard');
});
