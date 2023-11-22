<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ControllerJob;
use App\Http\Controllers\AuthController;

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


Route::middleware(['guest:user'])->group(function (){
    Route::get('/login', function () {
        return view('landingPage.login');
    })->name('login');
    Route::post('/LoginUser', [AuthController::class, 'LoginUser']);
});

