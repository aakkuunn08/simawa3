<?php

use App\Http\Controllers\ProfileController;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/

//
// DASHBOARD MAHASISWA (PUBLIC - TANPA LOGIN)
//
Route::get('/', function () {
    return view('mahasiswa.dashboard');   // halaman mahasiswa
})->name('dashboard.mahasiswa');


//
// DASHBOARD ADMIN (HANYA LOGIN ADMIN)
//
Route::get('/dashboard', function () {
    return view('dashboard');             // dashboard admin dari Breeze
})->middleware(['auth', 'verified'])->name('dashboard');


//
// PROFILE (KHUSUS ADMIN LOGIN)
//
Route::middleware('auth')->group(function () {
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
});

Route::get('/tes-gambar', function () {
    return view('tes-gambar');
});

Route::get('/bem', function () {
    return view('mahasiswa.bem');  // halaman baru
})->name('bem.page');

require __DIR__.'/auth.php';
