<?php

use App\Http\Controllers\LoginController;
use App\Http\Controllers\RegisterAdminController;
use App\Http\Controllers\RegisterPenggunaController;
use App\Http\Controllers\Controller;
use App\Http\Controllers\AdminController;
use App\Http\Controllers\PenggunaController;
use App\Http\Controllers\StadionController;
use App\Http\Controllers\GorController;
use App\Http\Controllers\TimHomeController;
use App\Http\Controllers\TimAwayController;
use App\Http\Controllers\KompetisiController;
use App\Http\Controllers\JadwalSepakBolaController;
use App\Http\Controllers\JadwalFutsalController;
use App\Http\Controllers\TiketSepakBolaController;
use App\Http\Controllers\TiketFutsalController;
use App\Http\Controllers\PesanTiketSepakBolaController;
use App\Http\Controllers\PesanTiketFutsalController;
use Illuminate\Support\Facades\Route;

// Route Awal
Route::get('/', function () {
    return redirect()->route('login');
});

// Route Register Admin
Route::get('/registeradmin', [RegisterAdminController::class, 'showRegistrationForm'])->name('registeradmin');
Route::post('/registeradmin', [RegisterAdminController::class, 'registeradmin']);

// Route Login Admin
Route::get('/login', [LoginController::class, 'showLoginForm'])->name('login');
Route::post('/login', [LoginController::class, 'login']);

// Route Register Pengguna
Route::get('/registerpengguna', [RegisterPenggunaController::class, 'showRegistrationForm'])->name('registerpengguna');
Route::post('/registerpengguna', [RegisterPenggunaController::class, 'registerpengguna']);

// Route Index
Route::get('/dashboard', [Controller::class, 'dashboard'])->name('dashboard');

// Route Admin
Route::get('/Admin', [AdminController::class, 'index'])->name('Admin');

Route::get('/Admin/addform', [AdminController::class, 'add'])->name('addAdmin');

Route::post('/Admin/addform', [AdminController::class, 'insertdata'])->name('insertAdmin');
    
Route::get('/Admin/updateform/{id}', [AdminController::class, 'readdata'])->name('readAdmin');

Route::get('/Admin/allform/{id}', [AdminController::class, 'alldata'])->name('allAdmin');
    
Route::post('/Admin/updateform/{id}', [AdminController::class, 'updatedata'])->name('updateAdmin');
    
Route::get('/Admin/{id}', [AdminController::class, 'deletedata'])->name('deleteAdmin');

Route::get('/pdf-Admin', [AdminController::class, 'exportpdf'])->name('pdfAdmin');

// Route Pengguna
Route::get('/Pengguna', [PenggunaController::class, 'index'])->name('Pengguna');

Route::get('/Pengguna/addform', [PenggunaController::class, 'add'])->name('addPengguna');

Route::post('/Pengguna/addform', [PenggunaController::class, 'insertdata'])->name('insertPengguna');
    
Route::get('/Pengguna/updateform/{id}', [PenggunaController::class, 'readdata'])->name('readPengguna');

Route::get('/Pengguna/allform/{id}', [PenggunaController::class, 'alldata'])->name('allPengguna');
    
Route::post('/Pengguna/updateform/{id}', [PenggunaController::class, 'updatedata'])->name('updatePengguna');
    
Route::get('/Pengguna/{id}', [PenggunaController::class, 'deletedata'])->name('deletePengguna');

Route::get('/pdf-Pengguna', [PenggunaController::class, 'exportpdf'])->name('pdfPengguna');

// Route Stadion
Route::get('/Stadion', [StadionController::class, 'index'])->name('Stadion');

Route::get('/Stadion/addform', [StadionController::class, 'add'])->name('addStadion');

Route::post('/Stadion/addform', [StadionController::class, 'insertdata'])->name('insertStadion');
    
Route::get('/Stadion/updateform/{id}', [StadionController::class, 'readdata'])->name('readStadion');

Route::get('/Stadion/allform/{id}', [StadionController::class, 'alldata'])->name('allStadion');
    
Route::post('/Stadion/updateform/{id}', [StadionController::class, 'updatedata'])->name('updateStadion');
    
Route::get('/Stadion/{id}', [StadionController::class, 'deletedata'])->name('deleteStadion');

Route::get('/pdf-Stadion', [StadionController::class, 'exportpdf'])->name('pdfStadion');

// Route Gor
Route::get('/Gor', [GorController::class, 'index'])->name('Gor');

Route::get('/Gor/addform', [GorController::class, 'add'])->name('addGor');

Route::post('/Gor/addform', [GorController::class, 'insertdata'])->name('insertGor');
    
Route::get('/Gor/updateform/{id}', [GorController::class, 'readdata'])->name('readGor');

Route::get('/Gor/allform/{id}', [GorController::class, 'alldata'])->name('allGor');
    
Route::post('/Gor/updateform/{id}', [GorController::class, 'updatedata'])->name('updateGor');
    
Route::get('/Gor/{id}', [GorController::class, 'deletedata'])->name('deleteGor');

Route::get('/pdf-Gor', [GorController::class, 'exportpdf'])->name('pdfGor');

// Route Tim Home
Route::get('/TimHome', [TimHomeController::class, 'index'])->name('TimHome');

Route::get('/TimHome/addform', [TimHomeController::class, 'add'])->name('addTimHome');

Route::post('/TimHome/addform', [TimHomeController::class, 'insertdata'])->name('insertTimHome');
    
Route::get('/TimHome/updateform/{id}', [TimHomeController::class, 'readdata'])->name('readTimHome');

Route::get('/TimHome/allform/{id}', [TimHomeController::class, 'alldata'])->name('allTimHome');
    
Route::post('/TimHome/updateform/{id}', [TimHomeController::class, 'updatedata'])->name('updateTimHome');
    
Route::get('/TimHome/{id}', [TimHomeController::class, 'deletedata'])->name('deleteTimHome');

Route::get('/pdf-TimHome', [TimHomeController::class, 'exportpdf'])->name('pdfTimHome');

// Route Tim Away
Route::get('/TimAway', [TimAwayController::class, 'index'])->name('TimAway');

Route::get('/TimAway/addform', [TimAwayController::class, 'add'])->name('addTimAway');

Route::post('/TimAway/addform', [TimAwayController::class, 'insertdata'])->name('insertTimAway');
    
Route::get('/TimAway/updateform/{id}', [TimAwayController::class, 'readdata'])->name('readTimAway');

Route::get('/TimAway/allform/{id}', [TimAwayController::class, 'alldata'])->name('allTimAway');
    
Route::post('/TimAway/updateform/{id}', [TimAwayController::class, 'updatedata'])->name('updateTimAway');
    
Route::get('/TimAway/{id}', [TimAwayController::class, 'deletedata'])->name('deleteTimAway');

Route::get('/pdf-TimAway', [TimAwayController::class, 'exportpdf'])->name('pdfTimAway');

// Route Kompetisi
Route::get('/Kompetisi', [KompetisiController::class, 'index'])->name('Kompetisi');

Route::get('/Kompetisi/addform', [KompetisiController::class, 'add'])->name('addKompetisi');

Route::post('/Kompetisi/addform', [KompetisiController::class, 'insertdata'])->name('insertKompetisi');
    
Route::get('/Kompetisi/updateform/{id}', [KompetisiController::class, 'readdata'])->name('readKompetisi');

Route::get('/Kompetisi/allform/{id}', [KompetisiController::class, 'alldata'])->name('allKompetisi');
    
Route::post('/Kompetisi/updateform/{id}', [KompetisiController::class, 'updatedata'])->name('updateKompetisi');
    
Route::get('/Kompetisi/{id}', [KompetisiController::class, 'deletedata'])->name('deleteKompetisi');

Route::get('/pdf-Kompetisi', [KompetisiController::class, 'exportpdf'])->name('pdfKompetisi');

// Route Jadwal Sepak Bola
Route::get('/JadwalSepakBola', [JadwalSepakBolaController::class, 'index'])->name('JadwalSepakBola');

Route::get('/JadwalSepakBola/addform', [JadwalSepakBolaController::class, 'add'])->name('addJadwalSepakBola');

Route::post('/JadwalSepakBola/addform', [JadwalSepakBolaController::class, 'insertdata'])->name('insertJadwalSepakBola');
    
Route::get('/JadwalSepakBola/updateform/{id}', [JadwalSepakBolaController::class, 'readdata'])->name('readJadwalSepakBola');

Route::get('/JadwalSepakBola/allform/{id}', [JadwalSepakBolaController::class, 'alldata'])->name('allJadwalSepakBola');
    
Route::post('/JadwalSepakBola/updateform/{id}', [JadwalSepakBolaController::class, 'updatedata'])->name('updateJadwalSepakBola');
    
Route::get('/JadwalSepakBola/{id}', [JadwalSepakBolaController::class, 'deletedata'])->name('deleteJadwalSepakBola');

Route::get('/pdf-JadwalSepakBola', [JadwalSepakBolaController::class, 'exportpdf'])->name('pdfJadwalSepakBola');

// Route Jadwal Futsal
Route::get('/JadwalFutsal', [JadwalFutsalController::class, 'index'])->name('JadwalFutsal');

Route::get('/JadwalFutsal/addform', [JadwalFutsalController::class, 'add'])->name('addJadwalFutsal');

Route::post('/JadwalFutsal/addform', [JadwalFutsalController::class, 'insertdata'])->name('insertJadwalFutsal');
    
Route::get('/JadwalFutsal/updateform/{id}', [JadwalFutsalController::class, 'readdata'])->name('readJadwalFutsal');

Route::get('/JadwalFutsal/allform/{id}', [JadwalFutsalController::class, 'alldata'])->name('allJadwalFutsal');
    
Route::post('/JadwalFutsal/updateform/{id}', [JadwalFutsalController::class, 'updatedata'])->name('updateJadwalFutsal');
    
Route::get('/JadwalFutsal/{id}', [JadwalFutsalController::class, 'deletedata'])->name('deleteJadwalFutsal');

Route::get('/pdf-JadwalFutsal', [JadwalFutsalController::class, 'exportpdf'])->name('pdfJadwalFutsal');

// Route Tiket Sepak Bola
Route::get('/TiketSepakBola', [TiketSepakBolaController::class, 'index'])->name('TiketSepakBola');

Route::get('/TiketSepakBola/addform', [TiketSepakBolaController::class, 'add'])->name('addTiketSepakBola');

Route::post('/TiketSepakBola/addform', [TiketSepakBolaController::class, 'insertdata'])->name('insertTiketSepakBola');
    
Route::get('/TiketSepakBola/updateform/{id}', [TiketSepakBolaController::class, 'readdata'])->name('readTiketSepakBola');

Route::get('/TiketSepakBola/allform/{id}', [TiketSepakBolaController::class, 'alldata'])->name('allTiketSepakBola');
    
Route::post('/TiketSepakBola/updateform/{id}', [TiketSepakBolaController::class, 'updatedata'])->name('updateTiketSepakBola');
    
Route::get('/TiketSepakBola/{id}', [TiketSepakBolaController::class, 'deletedata'])->name('deleteTiketSepakBola');

Route::get('/pdf-TiketSepakBola', [TiketSepakBolaController::class, 'exportpdf'])->name('pdfTiketSepakBola');

// Route Tiket Futsal
Route::get('/TiketFutsal', [TiketFutsalController::class, 'index'])->name('TiketFutsal');

Route::get('/TiketFutsal/addform', [TiketFutsalController::class, 'add'])->name('addTiketFutsal');

Route::post('/TiketFutsal/addform', [TiketFutsalController::class, 'insertdata'])->name('insertTiketFutsal');
    
Route::get('/TiketFutsal/updateform/{id}', [TiketFutsalController::class, 'readdata'])->name('readTiketFutsal');

Route::get('/TiketFutsal/allform/{id}', [TiketFutsalController::class, 'alldata'])->name('allTiketFutsal');
    
Route::post('/TiketFutsal/updateform/{id}', [TiketFutsalController::class, 'updatedata'])->name('updateTiketFutsal');
    
Route::get('/TiketFutsal/{id}', [TiketFutsalController::class, 'deletedata'])->name('deleteTiketFutsal');

Route::get('/pdf-TiketFutsal', [TiketFutsalController::class, 'exportpdf'])->name('pdfTiketFutsal');

// Route Pesan Tiket Sepak Bola
Route::get('/PesanTiketSepakBola', [PesanTiketSepakBolaController::class, 'index'])->name('PesanTiketSepakBola');

Route::get('/PesanTiketSepakBola/addform', [PesanTiketSepakBolaController::class, 'add'])->name('addPesanTiketSepakBola');

Route::post('/PesanTiketSepakBola/addform', [PesanTiketSepakBolaController::class, 'insertdata'])->name('insertPesanTiketSepakBola');
    
Route::get('/PesanTiketSepakBola/updateform/{id}', [PesanTiketSepakBolaController::class, 'readdata'])->name('readPesanTiketSepakBola');

Route::get('/PesanTiketSepakBola/allform/{id}', [PesanTiketSepakBolaController::class, 'alldata'])->name('allPesanTiketSepakBola');
    
Route::post('/PesanTiketSepakBola/updateform/{id}', [PesanTiketSepakBolaController::class, 'updatedata'])->name('updatePesanTiketSepakBola');
    
Route::get('/PesanTiketSepakBola/{id}', [PesanTiketSepakBolaController::class, 'deletedata'])->name('deletePesanTiketSepakBola');

Route::get('/pdf-PesanTiketSepakBola', [PesanTiketSepakBolaController::class, 'exportpdf'])->name('pdfPesanTiketSepakBola');

// Route Pesan Tiket Futsal
Route::get('/PesanTiketFutsal', [PesanTiketFutsalController::class, 'index'])->name('PesanTiketFutsal');

Route::get('/PesanTiketFutsal/addform', [PesanTiketFutsalController::class, 'add'])->name('addPesanTiketFutsal');

Route::post('/PesanTiketFutsal/addform', [PesanTiketFutsalController::class, 'insertdata'])->name('insertPesanTiketFutsal');
    
Route::get('/PesanTiketFutsal/updateform/{id}', [PesanTiketFutsalController::class, 'readdata'])->name('readPesanTiketFutsal');

Route::get('/PesanTiketFutsal/allform/{id}', [PesanTiketFutsalController::class, 'alldata'])->name('allPesanTiketFutsal');
    
Route::post('/PesanTiketFutsal/updateform/{id}', [PesanTiketFutsalController::class, 'updatedata'])->name('updatePesanTiketFutsal');
    
Route::get('/PesanTiketFutsal/{id}', [PesanTiketFutsalController::class, 'deletedata'])->name('deletePesanTiketFutsal');

Route::get('/pdf-PesanTiketFutsal', [PesanTiketFutsalController::class, 'exportpdf'])->name('pdfPesanTiketFutsal');