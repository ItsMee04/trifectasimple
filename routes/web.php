<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\AuthController;
use App\Http\Controllers\BarcodeController;
use App\Http\Controllers\CustomerController;
use App\Http\Controllers\KontakController;
use App\Http\Controllers\ProfesiController;
use App\Http\Controllers\DashboardController;
use App\Http\Controllers\IdentitasController;
use App\Http\Controllers\KaryawanController;
use App\Http\Controllers\KategoriController;
use App\Http\Controllers\PosController;
use App\Http\Controllers\ProdukController;
use App\Http\Controllers\SalesController;
use App\Http\Controllers\SuplierController;
use App\Http\Controllers\UsersController;
use App\Models\KaryawanModel;
use Faker\Core\Barcode;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/

Route::get('/', function () {
    return view('index');
});

Route::get('login', [AuthController::class, 'index'])->name('login');
Route::post('login', [AuthController::class, 'login']);

Route::middleware('auth')->group(function () {
    Route::middleware('onlyadmin')->group(function () {

        Route::get('logout', [AuthController::class, 'logout']);
        Route::get('dashboard', [DashboardController::class, 'index']);

        //<!-- MASTER REFRENSI IDENTITAS-->
        Route::get('identitas', [IdentitasController::class, 'index']);
        Route::post('identitas', [IdentitasController::class, 'store']);
        Route::get('edit-identitas/{id}', [IdentitasController::class, 'show']);
        Route::post('edit-identitas/{id}', [IdentitasController::class, 'update']);
        Route::get('delete-identitas/{id}', [IdentitasController::class, 'delete']);

        //<!-- MASTER REFRENSI PROFESI -->
        Route::get('profesi', [ProfesiController::class, 'index']);
        Route::post('profesi', [ProfesiController::class, 'store']);
        Route::get('edit-profesi/{id}', [ProfesiController::class, 'show']);
        Route::post('edit-profesi/{id}', [ProfesiController::class, 'update']);
        Route::get('delete-profesi/{id}', [ProfesiController::class, 'delete']);

        //<!-- MASTER REFRENSI KONTAK -->
        Route::get('kontak', [KontakController::class, 'index']);
        Route::post('kontak', [KontakController::class, 'store']);
        Route::get('edit-kontak/{id}', [KontakController::class, 'show']);
        Route::post('edit-kontak/{id}', [KontakController::class, 'update']);
        Route::get('delete-kontak/{id}', [KontakController::class, 'delete']);

        //<!-- MASTER REFRENSI KATEGORI -->
        Route::get('kategori', [KategoriController::class, 'index']);
        Route::post('kategori', [KategoriController::class, 'store']);
        Route::post('edit-kategori/{id}', [KategoriController::class, 'update']);
        Route::get('delete-kategori/{id}', [KategoriController::class, 'delete']);

        //<!-- MASTER PRODUK BARANG -->
        Route::get('produk', [ProdukController::class, 'index']);
        Route::post('produk', [ProdukController::class, 'store']);
        Route::get('produk-detail/{id}', [ProdukController::class, 'detailProduk']);
        Route::get('edit-produk/{id}', [ProdukController::class, 'show']);
        Route::post('edit-produk/{id}', [ProdukController::class, 'update']);
        Route::get('delete-produk/{id}', [ProdukController::class, 'delete']);

        //<!-- MASTER BARCODE BARANG -->
        Route::get('scanbarcode', [BarcodeController::class, 'index']);
        Route::post('scanbarcodevalidasi', [BarcodeController::class, 'scanbarcodevalidasi']);
        Route::get('viewbarcode/{id}', [BarcodeController::class, "viewBarcode"]);
        Route::get('printbarcode/{id}', [BarcodeController::class, "printBarcode"]);

        //<!-- MASTER SUPPLIER -->
        Route::get('suplier', [SuplierController::class, 'index']);
        Route::post('suplier', [SuplierController::class, 'store']);
        Route::get('edit-suplier/{id}', [SuplierController::class, 'show']);
        Route::post('edit-suplier/{id}', [SuplierController::class, 'update']);
        Route::get('delete-suplier/{id}', [SuplierController::class, 'delete']);

        //<!-- MASTER SUPPLIER -->
        Route::get('customer', [CustomerController::class, 'index']);
        Route::post('customer', [CustomerController::class, 'store']);
        Route::post('edit-customer/{id}', [CustomerController::class, 'update']);
        Route::get('delete-customer/{id}', [CustomerController::class, 'delete']);

        //<!-- MANAGEMENT USERS -->
        Route::get('karyawan', [KaryawanController::class, 'index']);
        Route::post('karyawan', [KaryawanController::class, 'store']);
        Route::get('edit-karyawan/{id}', [KaryawanController::class, 'show']);
        Route::post('edit-karyawan/{id}', [KaryawanController::class, 'update']);
        Route::post('users-karyawan/{id}', [KaryawanController::class, 'usersKaryawan']);
        Route::get('delete-karyawan/{id}', [KaryawanController::class, 'delete']);

        //<!-- MANAGEMENT USERS -->
        Route::get('users', [UsersController::class, 'index']);
        Route::post('edit-users/{id}', [UsersController::class, 'update']);
        Route::get('delete-users/{id}', [UsersController::class, 'delete']);

        // <!-- TRANSAKI SALES -->
        Route::get('sales-transaksi', [SalesController::class, 'index']);

        // <!-- TRANSAKI POS -->
        Route::get('pos', [PosController::class, 'index']);
    });
});
