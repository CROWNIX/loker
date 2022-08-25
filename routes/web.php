<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\RegisterController;
use App\Http\Controllers\LoginController;
use App\Http\Controllers\LamaranController;
use App\Http\Controllers\LowonganController;
use App\Http\Controllers\AdminController;
use App\Http\Controllers\PerusahaanController;
use App\Http\Controllers\KategoriController;
use App\Models\Perusahaan;

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

Route::get('/', function () {
    if(session("id")){
        return redirect("/perusahaan/dashboard");
    }

    return view("index");
});

Route::get('/pusat-informasi', function () {
    return view("pusat_informasi");
});

Route::group(['prefix' => 'admin'], function () {
    Route::get('/dashboard', [AdminController::class, "index"]);
    Route::get('/login', [AdminController::class, "login"]);
    Route::post('/login', [AdminController::class, "authenticate"]);
    Route::get('/users', [AdminController::class, "users"]);
    Route::resource("/perusahaan", PerusahaanController::class);
    Route::resource("/kategori", KategoriController::class);
});

Route::group(['prefix' => 'perusahaan'], function () {
    Route::get("/dashboard", [PerusahaanController::class, "dashboard"]);
    Route::get('/login', [PerusahaanController::class, "login"]);
    Route::post('/login', [PerusahaanController::class, "authenticate"]);
    Route::get('/register', [PerusahaanController::class, "register"]);
    Route::post('/register', [PerusahaanController::class, "daftarPerusahaan"]);
    Route::get('/lowongan', [PerusahaanController::class, "lowongan"]);
    Route::post('/lowongan', [PerusahaanController::class, "tambahLowongan"]);
    Route::get('/lamaran', [PerusahaanController::class, "lamaran"]);
    Route::get('/interview', [PerusahaanController::class, "interview"]);
});


Route::resource("/lowongan-kerja", LowonganController::class);
Route::resource("/lamaran", LamaranController::class);
Route::get("/zip", [LamaranController::class,"zip"]);

Route::post("/login", [LoginController::class, "authenticate"]);
Route::post("/logout", [LoginController::class, "logout"]);
Route::post("/register", [RegisterController::class, "store"]);