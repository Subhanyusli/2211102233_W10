<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\BukuController;

Route::get('/', function () {
    return redirect('/buku');
});

Route::resource('buku', BukuController::class);
// Tampilkan daftar buku
Route::get('/buku', [BukuController::class, 'index'])->name('buku.index');

// Tampilkan form tambah buku
Route::get('/buku/create', [BukuController::class, 'create'])->name('buku.create');

// Simpan buku baru
Route::post('/buku', [BukuController::class, 'store'])->name('buku.store');

// Tampilkan form edit buku
Route::get('/buku/{id}/edit', [BukuController::class, 'edit'])->name('buku.edit');

// Update buku
Route::put('/buku/{id}', [BukuController::class, 'update'])->name('buku.update');

// Hapus buku
Route::delete('/buku/{id}', [BukuController::class, 'destroy'])->name('buku.destroy');


