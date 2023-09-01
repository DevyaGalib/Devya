<?php

use App\Http\Controllers\BerkasSiswaController;
use App\Http\Controllers\DataAdminController;
use App\Http\Controllers\SettingController;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\PembayaranController;
use App\Http\Controllers\SiswaController;
use App\Models\BerkasSiswa;
use App\Models\Siswa;
use Illuminate\Support\Facades\Route;

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

Route::get('/', [HomeController::class, 'index']);
Route::get('daftar', [HomeController::class, 'daftar']);
Route::post('daftar_siswa', [HomeController::class, 'daftar_siswa'])->name('daftar_siswa');
Route::get('notif', [HomeController::class, 'notif']);

Route::middleware([
    'auth:sanctum',
    config('jetstream.auth_session'),
    'verified',
])->group(function () {
    Route::get('dashboard', function () {
        return view('dashboard.index');
    })->name('dashboard.index');
    Route::resource('setting', SettingController::class);
    Route::resource('data_admin', DataAdminController::class);
    Route::post('image-upload', [SettingController::class, 'storeImage'])->name('image.upload');
    Route::resource('siswa', SiswaController::class);
    Route::resource('berkas_siswa', BerkasSiswaController::class);
    Route::resource('pembayaran', PembayaranController::class);
});
