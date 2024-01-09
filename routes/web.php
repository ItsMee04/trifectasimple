<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\AuthController;
use App\Http\Controllers\KontakController;
use App\Http\Controllers\ProfesiController;
use App\Http\Controllers\DashboardController;
use App\Http\Controllers\IdentitasController;
use App\Http\Controllers\ProdukController;

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
        Route::get('identitas',[IdentitasController::class, 'index']);
        Route::post('identitas',[IdentitasController::class, 'store']);
        Route::get('edit-identitas/{id}',[IdentitasController::class, 'show']);
        Route::post('edit-identitas/{id}',[IdentitasController::class, 'update']);
        Route::get('delete-identitas/{id}',[IdentitasController::class, 'delete']);

        //<!-- MASTER REFRENSI PROFESI -->
        Route::get('profesi',[ProfesiController::class, 'index']);
        Route::post('profesi',[ProfesiController::class, 'store']);
        Route::get('edit-profesi/{id}',[ProfesiController::class, 'show']);
        Route::post('edit-profesi/{id}',[ProfesiController::class, 'update']);
        Route::get('delete-profesi/{id}',[ProfesiController::class, 'delete']);

        //<!-- MASTER REFRENSI KONTAK -->
        Route::get('kontak',[KontakController::class, 'index']);
        Route::post('kontak',[KontakController::class, 'store']);
        Route::get('edit-kontak/{id}',[KontakController::class, 'show']);
        Route::post('edit-kontak/{id}',[KontakController::class, 'update']);
        Route::get('delete-kontak/{id}',[KontakController::class, 'delete']);

        //<!-- MASTER PRODUK BARANG -->
        Route::get('produk',[ProdukController::class, 'index']);
    });
});