<?php

use App\Http\Controllers\ProfileController;
use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome');
});

Route::get('/dashboard', function () {
    return view('dashboard');
})->middleware(['auth', 'verified'])->name('dashboard');

Route::middleware('auth')->group(function () {
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
    
    Route::get('/permintaan-masuk', function () {
        return view('pages.permintaan-masuk');
    })->name('permintaan-masuk');

    Route::get('/dikerjakan', function () {
        return view('pages.dikerjakan');
    })->name('dikerjakan');

    Route::get('/history_pekerjaan', function () {
        return view('pages.history_pekerjaan');
    })->name('history_pekerjaan');

    Route::get('/pekerjaan_selesai', function () {
        return view('pages.pekerjaan_selesai');
    })->name('pekerjaan_selesai');

     Route::get('/hardware', function () {
        return view('pages.hardware');
    })->name('hardware');

    Route::get('/form-software', function () {
        return view('pages.software');
    })->name('software');

    Route::get('/permintaan_perbaikan', function () {
        return view('pages.permintaan_perbaikan');
    })->name('permintaan_perbaikan');

     Route::get('/tindaklanjut_perbaikan', function () {
        return view('pages.tindaklanjut_perbaikan');
    })->name('tindaklanjut_perbaikan');

    Route::get('/form-hardware', function () {
        return view('pages.form-hardware');
    })->name('form-hardware');

    Route::get('/form-tindaklanjut', function () {
        return view('pages.form-tindaklanjut');
    })->name('form-tindaklanjut');

    Route::get('/form-permintaanperbaikan', function () {
        return view('pages.form-permintaanperbaikan');
    })->name('form-permintaanperbaikan');
   

    
});



Route::get('/request-user', function () {
    return view('pages.request-user');
})->name('request-user');

require __DIR__.'/auth.php';
