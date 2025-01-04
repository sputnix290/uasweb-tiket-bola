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
use App\Http\Middleware\EnsureUserIsAuthenticated;

// Public routes
Route::get('/', function () {
    return redirect()->route('login');
});

// Authentication routes
Route::get('/login', [PenggunaController::class, 'showLoginForm'])->name('login');
Route::post('/login', [PenggunaController::class, 'login']);
Route::get('/registeradmin', [RegisterAdminController::class, 'showRegistrationForm'])->name('registeradmin');
Route::post('/registeradmin', [RegisterAdminController::class, 'registeradmin']);
Route::get('/registerpengguna', [RegisterPenggunaController::class, 'showRegistrationForm'])->name('registerpengguna');
Route::post('/registerpengguna', [RegisterPenggunaController::class, 'registerpengguna']);

// Protected routes
Route::middleware([EnsureUserIsAuthenticated::class])->group(function () {
    // Dashboard - now supports both GET and POST
    Route::match(['get', 'post'], '/dashboard', [Controller::class, 'dashboard'])->name('dashboard');

    // Admin routes
    Route::prefix('Admin')->group(function () {
        Route::get('/', [AdminController::class, 'index'])->name('Admin');
        Route::get('/addform', [AdminController::class, 'add'])->name('addAdmin');
        Route::post('/addform', [AdminController::class, 'insertdata'])->name('insertAdmin');
        Route::get('/updateform/{id}', [AdminController::class, 'readdata'])->name('readAdmin');
        Route::get('/allform/{id}', [AdminController::class, 'alldata'])->name('allAdmin');
        Route::post('/updateform/{id}', [AdminController::class, 'updatedata'])->name('updateAdmin');
        Route::get('/{id}', [AdminController::class, 'deletedata'])->name('deleteAdmin');
        Route::get('/pdf-Admin', [AdminController::class, 'exportpdf'])->name('pdfAdmin');
    });

    // Pengguna routes
    Route::prefix('Pengguna')->group(function () {
        Route::get('/', [PenggunaController::class, 'index'])->name('Pengguna');
        Route::get('/addform', [PenggunaController::class, 'add'])->name('addPengguna');
        Route::post('/addform', [PenggunaController::class, 'insertdata'])->name('insertPengguna');
        Route::get('/updateform/{id}', [PenggunaController::class, 'readdata'])->name('readPengguna');
        Route::get('/allform/{id}', [PenggunaController::class, 'alldata'])->name('allPengguna');
        Route::post('/updateform/{id}', [PenggunaController::class, 'updatedata'])->name('updatePengguna');
        Route::get('/{id}', [PenggunaController::class, 'deletedata'])->name('deletePengguna');
        Route::get('/pdf-Pengguna', [PenggunaController::class, 'exportpdf'])->name('pdfPengguna');
    });

    // Stadion routes
    Route::prefix('Stadion')->group(function () {
        Route::get('/', [StadionController::class, 'index'])->name('Stadion');
        Route::get('/addform', [StadionController::class, 'add'])->name('addStadion');
        Route::post('/addform', [StadionController::class, 'insertdata'])->name('insertStadion');
        Route::get('/updateform/{id}', [StadionController::class, 'readdata'])->name('readStadion');
        Route::get('/allform/{id}', [StadionController::class, 'alldata'])->name('allStadion');
        Route::post('/updateform/{id}', [StadionController::class, 'updatedata'])->name('updateStadion');
        Route::get('/{id}', [StadionController::class, 'deletedata'])->name('deleteStadion');
        Route::get('/pdf-Stadion', [StadionController::class, 'exportpdf'])->name('pdfStadion');
    });

    // Gor routes
    Route::prefix('Gor')->group(function () {
        Route::get('/', [GorController::class, 'index'])->name('Gor');
        Route::get('/addform', [GorController::class, 'add'])->name('addGor');
        Route::post('/addform', [GorController::class, 'insertdata'])->name('insertGor');
        Route::get('/updateform/{id}', [GorController::class, 'readdata'])->name('readGor');
        Route::get('/allform/{id}', [GorController::class, 'alldata'])->name('allGor');
        Route::post('/updateform/{id}', [GorController::class, 'updatedata'])->name('updateGor');
        Route::get('/{id}', [GorController::class, 'deletedata'])->name('deleteGor');
        Route::get('/pdf-Gor', [GorController::class, 'exportpdf'])->name('pdfGor');
    });

    // TimHome routes
    Route::prefix('TimHome')->group(function () {
        Route::get('/', [TimHomeController::class, 'index'])->name('TimHome');
        Route::get('/addform', [TimHomeController::class, 'add'])->name('addTimHome');
        Route::post('/addform', [TimHomeController::class, 'insertdata'])->name('insertTimHome');
        Route::get('/updateform/{id}', [TimHomeController::class, 'readdata'])->name('readTimHome');
        Route::get('/allform/{id}', [TimHomeController::class, 'alldata'])->name('allTimHome');
        Route::post('/updateform/{id}', [TimHomeController::class, 'updatedata'])->name('updateTimHome');
        Route::get('/{id}', [TimHomeController::class, 'deletedata'])->name('deleteTimHome');
        Route::get('/pdf-TimHome', [TimHomeController::class, 'exportpdf'])->name('pdfTimHome');
    });

    // TimAway routes
    Route::prefix('TimAway')->group(function () {
        Route::get('/', [TimAwayController::class, 'index'])->name('TimAway');
        Route::get('/addform', [TimAwayController::class, 'add'])->name('addTimAway');
        Route::post('/addform', [TimAwayController::class, 'insertdata'])->name('insertTimAway');
        Route::get('/updateform/{id}', [TimAwayController::class, 'readdata'])->name('readTimAway');
        Route::get('/allform/{id}', [TimAwayController::class, 'alldata'])->name('allTimAway');
        Route::post('/updateform/{id}', [TimAwayController::class, 'updatedata'])->name('updateTimAway');
        Route::get('/{id}', [TimAwayController::class, 'deletedata'])->name('deleteTimAway');
        Route::get('/pdf-TimAway', [TimAwayController::class, 'exportpdf'])->name('pdfTimAway');
    });

    // Kompetisi routes
    Route::prefix('Kompetisi')->group(function () {
        Route::get('/', [KompetisiController::class, 'index'])->name('Kompetisi');
        Route::get('/addform', [KompetisiController::class, 'add'])->name('addKompetisi');
        Route::post('/addform', [KompetisiController::class, 'insertdata'])->name('insertKompetisi');
        Route::get('/updateform/{id}', [KompetisiController::class, 'readdata'])->name('readKompetisi');
        Route::get('/allform/{id}', [KompetisiController::class, 'alldata'])->name('allKompetisi');
        Route::post('/updateform/{id}', [KompetisiController::class, 'updatedata'])->name('updateKompetisi');
        Route::get('/{id}', [KompetisiController::class, 'deletedata'])->name('deleteKompetisi');
        Route::get('/pdf-Kompetisi', [KompetisiController::class, 'exportpdf'])->name('pdfKompetisi');
    });

    // JadwalSepakBola routes
    Route::prefix('JadwalSepakBola')->group(function () {
        Route::get('/', [JadwalSepakBolaController::class, 'index'])->name('JadwalSepakBola');
        Route::get('/addform', [JadwalSepakBolaController::class, 'add'])->name('addJadwalSepakBola');
        Route::post('/addform', [JadwalSepakBolaController::class, 'insertdata'])->name('insertJadwalSepakBola');
        Route::get('/updateform/{id}', [JadwalSepakBolaController::class, 'readdata'])->name('readJadwalSepakBola');
        Route::get('/allform/{id}', [JadwalSepakBolaController::class, 'alldata'])->name('allJadwalSepakBola');
        Route::post('/updateform/{id}', [JadwalSepakBolaController::class, 'updatedata'])->name('updateJadwalSepakBola');
        Route::get('/{id}', [JadwalSepakBolaController::class, 'deletedata'])->name('deleteJadwalSepakBola');
        Route::get('/pdf-JadwalSepakBola', [JadwalSepakBolaController::class, 'exportpdf'])->name('pdfJadwalSepakBola');
    });

    // JadwalFutsal routes
    Route::prefix('JadwalFutsal')->group(function () {
        Route::get('/', [JadwalFutsalController::class, 'index'])->name('JadwalFutsal');
        Route::get('/addform', [JadwalFutsalController::class, 'add'])->name('addJadwalFutsal');
        Route::post('/addform', [JadwalFutsalController::class, 'insertdata'])->name('insertJadwalFutsal');
        Route::get('/updateform/{id}', [JadwalFutsalController::class, 'readdata'])->name('readJadwalFutsal');
        Route::get('/allform/{id}', [JadwalFutsalController::class, 'alldata'])->name('allJadwalFutsal');
        Route::post('/updateform/{id}', [JadwalFutsalController::class, 'updatedata'])->name('updateJadwalFutsal');
        Route::get('/{id}', [JadwalFutsalController::class, 'deletedata'])->name('deleteJadwalFutsal');
        Route::get('/pdf-JadwalFutsal', [JadwalFutsalController::class, 'exportpdf'])->name('pdfJadwalFutsal');
    });

    // TiketSepakBola routes
    Route::prefix('TiketSepakBola')->group(function () {
        Route::get('/', [TiketSepakBolaController::class, 'index'])->name('TiketSepakBola');
        Route::get('/addform', [TiketSepakBolaController::class, 'add'])->name('addTiketSepakBola');
        Route::post('/addform', [TiketSepakBolaController::class, 'insertdata'])->name('insertTiketSepakBola');
        Route::get('/updateform/{id}', [TiketSepakBolaController::class, 'readdata'])->name('readTiketSepakBola');
        Route::get('/allform/{id}', [TiketSepakBolaController::class, 'alldata'])->name('allTiketSepakBola');
        Route::post('/updateform/{id}', [TiketSepakBolaController::class, 'updatedata'])->name('updateTiketSepakBola');
        Route::get('/{id}', [TiketSepakBolaController::class, 'deletedata'])->name('deleteTiketSepakBola');
        Route::get('/pdf-TiketSepakBola', [TiketSepakBolaController::class, 'exportpdf'])->name('pdfTiketSepakBola');
    });

    // TiketFutsal routes
    Route::prefix('TiketFutsal')->group(function () {
        Route::get('/', [TiketFutsalController::class, 'index'])->name('TiketFutsal');
        Route::get('/addform', [TiketFutsalController::class, 'add'])->name('addTiketFutsal');
        Route::post('/addform', [TiketFutsalController::class, 'insertdata'])->name('insertTiketFutsal');
        Route::get('/updateform/{id}', [TiketFutsalController::class, 'readdata'])->name('readTiketFutsal');
        Route::get('/allform/{id}', [TiketFutsalController::class, 'alldata'])->name('allTiketFutsal');
        Route::post('/updateform/{id}', [TiketFutsalController::class, 'updatedata'])->name('updateTiketFutsal');
        Route::get('/{id}', [TiketFutsalController::class, 'deletedata'])->name('deleteTiketFutsal');
        Route::get('/pdf-TiketFutsal', [TiketFutsalController::class, 'exportpdf'])->name('pdfTiketFutsal');
    });

    // PesanTiketSepakBola routes
    Route::prefix('PesanTiketSepakBola')->group(function () {
        Route::get('/', [PesanTiketSepakBolaController::class, 'index'])->name('PesanTiketSepakBola');
        Route::get('/addform', [PesanTiketSepakBolaController::class, 'add'])->name('addPesanTiketSepakBola');
        Route::post('/addform', [PesanTiketSepakBolaController::class, 'insertdata'])->name('insertPesanTiketSepakBola');
        Route::get('/updateform/{id}', [PesanTiketSepakBolaController::class, 'readdata'])->name('readPesanTiketSepakBola');
        Route::get('/allform/{id}', [PesanTiketSepakBolaController::class, 'alldata'])->name('allPesanTiketSepakBola');
        Route::post('/updateform/{id}', [PesanTiketSepakBolaController::class, 'updatedata'])->name('updatePesanTiketSepakBola');
        Route::get('/{id}', [PesanTiketSepakBolaController::class, 'deletedata'])->name('deletePesanTiketSepakBola');
        Route::get('/pdf-PesanTiketSepakBola', [PesanTiketSepakBolaController::class, 'exportpdf'])->name('pdfPesanTiketSepakBola');
    });

    // PesanTiketFutsal routes
    Route::prefix('PesanTiketFutsal')->group(function () {
        Route::get('/', [PesanTiketFutsalController::class, 'index'])->name('PesanTiketFutsal');
        Route::get('/addform', [PesanTiketFutsalController::class, 'add'])->name('addPesanTiketFutsal');
        Route::post('/addform', [PesanTiketFutsalController::class, 'insertdata'])->name('insertPesanTiketFutsal');
        Route::get('/updateform/{id}', [PesanTiketFutsalController::class, 'readdata'])->name('readPesanTiketFutsal');
        Route::get('/allform/{id}', [PesanTiketFutsalController::class, 'alldata'])->name('allPesanTiketFutsal');
        Route::post('/updateform/{id}', [PesanTiketFutsalController::class, 'updatedata'])->name('updatePesanTiketFutsal');
        Route::get('/{id}', [PesanTiketFutsalController::class, 'deletedata'])->name('deletePesanTiketFutsal');
        Route::get('/pdf-PesanTiketFutsal', [PesanTiketFutsalController::class, 'exportpdf'])->name('pdfPesanTiketFutsal');
    });
});

// Logout route
Route::post('/logout', [LoginController::class, 'logout'])->name('logout');