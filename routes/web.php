<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\AuthController;
use App\Http\Controllers\BaController;
use App\Http\Controllers\InstansiController;
use App\Http\Controllers\SignatureController;
 
Route::get('/', function () {
    return view('welcome');
});
 
Route::controller(AuthController::class)->group(function () {
    Route::get('register', 'register')->name('register');
    Route::post('register', 'registerBa')->name('register.ba');
  
    Route::get('login', 'login')->name('login');
    Route::post('login', 'loginBa')->name('login.ba');
  
    Route::get('logout', 'logout')->middleware('auth')->name('logout');
});
  
Route::middleware('auth')->group(function () {
    Route::get('dashboard', function () {
        return view('dashboard');
    })->name('dashboard');
 
    Route::controller(BaController::class)->prefix('ba')->group(function () {
        Route::get('', 'index')->name('ba');
        Route::get('create', 'create')->name('ba.create');
        Route::post('store', 'store')->name('ba.store');
        Route::get('show/{id}', 'show')->name('ba.show');
        Route::get('cetak/{id}', 'cetak')->name('ba.cetak');
        Route::get('edit/{id}', 'edit')->name('ba.edit');
        Route::put('edit/{id}', 'update')->name('ba.update');
        Route::delete('destroy/{id}', 'destroy')->name('ba.destroy');
        Route::get('/signature', [BaController::class, 'tandatangan']);
        Route::post('/signature', [BaController::class, 'save'])->name('signpad.save');
        Route::get('/signatureprodusen', [BaController::class, 'tandatanganprodusen']);
        Route::post('/signatureprodusen', [BaController::class, 'save'])->name('signpadprod.save');
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
 
    Route::get('/profile', [AuthController::class, 'profile'])->name('profile');

    //tandatangan
    //Route::get('/signature', [SignatureController::class, 'index']);
    //Route::post('/signature', [SignatureController::class, 'save'])->name('signpad.save');
});