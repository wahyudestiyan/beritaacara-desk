<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\AuthController;
use App\Http\Controllers\BaController;
use App\Http\Controllers\InstansiController;
use App\Http\Controllers\JenisBaController;
use App\Http\Controllers\SignatureController;
use App\Http\Controllers\DashboardController;
 
// Route::get('auth/login', function () {
//     return view('');
// });
Route::get('/', [AuthController::class, 'login']);
 
Route::controller(AuthController::class)->group(function () {
    Route::get('register', 'register')->name('register');
    Route::post('register', 'registerBa')->name('register.ba');
  
    Route::get('login', 'login')->name('login');
    Route::post('login', 'loginBa')->name('login.ba');
  
    Route::get('logout', 'logout')->middleware('auth')->name('logout');
});
  
Route::middleware('auth')->group(function () {
    Route::get('dashboard', [DashboardController::class, 'index'])->name('dashboard');
 
    Route::prefix('ba')->group(function () {
        Route::get('', [BaController::class, 'index'])->name('ba');
        Route::get('create', [BaController::class, 'create'])->name('ba.create');
        Route::post('store', [BaController::class, 'store'])->name('ba.store');
        Route::get('show/{id}', [BaController::class, 'show'])->name('ba.show');
        Route::get('cetak/{id}', [BaController::class, 'cetak'])->name('ba.cetak');
        Route::get('edit/{id}', [BaController::class, 'edit'])->name('ba.edit');
        Route::put('edit/{id}', [BaController::class, 'update'])->name('ba.update');
        Route::delete('destroy/{id}', [BaController::class, 'destroy'])->name('ba.destroy');
        Route::get('signature', [BaController::class, 'tandatangan'])->name('ba.signature');
        Route::post('signature', [BaController::class, 'save'])->name('ba.signpad.save');
        Route::get('signatureprodusen', [BaController::class, 'tandatanganprodusen'])->name('ba.signatureprodusen');
        Route::post('signatureprodusen', [BaController::class, 'saveprod'])->name('ba.signpadprod.save');
    });
    
    

    Route::controller(InstansiController::class)->prefix('instansi')->group(function () {
        Route::get('', 'index')->name('instansi');
        Route::get('create', 'create')->name('instansi.create');
        Route::post('store', 'store')->name('instansi.store');
        Route::get('show/{id}', 'show')->name('instansi.show');
        Route::get('edit/{id}', 'edit')->name('instansi.edit');
        Route::put('edit/{id}', 'update')->name('instansi.update');
        Route::delete('destroy/{id}', 'destroy')->name('instansi.destroy');
    });

    Route::controller(JenisBaController::class)->prefix('jenisba')->group(function () {
        Route::get('', 'index')->name('jenisba');
        Route::get('create', 'create')->name('jenisba.create');
        Route::post('store', 'store')->name('jenisba.store');
        Route::get('show/{id}', 'show')->name('jenisba.show');
        Route::get('edit/{id}', 'edit')->name('jenisba.edit');
        Route::put('edit/{id}', 'update')->name('jenisba.update');
        Route::delete('destroy/{id}', 'destroy')->name('jenisba.destroy');
    });

    Route::controller(RekapBageospasialController::class)->prefix('rekapbageospasial')->group(function () {
        Route::get('', 'index')->name('rekapbageospasial');
        Route::get('show/{id}', 'show')->name('rekapbageospasial.show');
    });

    Route::prefix('rekapbastatistik')->group(function () {
        Route::get('', [RekapBastatistikController::class, 'index'])->name('rekapbastatistik');
        Route::get('show/{id}', [RekapBastatistikController::class, 'show'])->name('rekapbastatistik.show');
    });
    
    
 
    Route::get('/profile', [AuthController::class, 'profile'])->name('profile');

    //tandatangan
    //Route::get('/signature', [SignatureController::class, 'index']);
    //Route::post('/signature', [SignatureController::class, 'save'])->name('signpad.save');
});