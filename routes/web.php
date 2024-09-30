<?php

use App\Http\Controllers\ProfileController;
use Illuminate\Support\Facades\Route;
use Illuminate\Support\Facades\Auth;
use App\Http\Controllers\AdminController;
use App\Http\Controllers\Auth\AuthenticatedSessionController;
use App\Http\Controllers\Auth\RegisteredUserController;
use App\Http\Controllers\PastryController;
use App\Models\Pastry;



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
});

Route::group(['middleware' => ['role:admin']], function () {
    Route::get('/admin/dashboard', [AdminController::class, 'index'])->name('admin.dashboard');
    // Tambahkan route admin lainnya di sini
});

require __DIR__.'/auth.php';

Route::get('/template', function () {
    return view('template.master'); // nama file template
});

Route::get('/register', [RegisteredUserController::class, 'create'])->name('register');
Route::get('/login', [AuthenticatedSessionController::class, 'create'])->name('login');
Route::get('/profile/edit', [ProfileController::class, 'edit'])->name('profile.edit');

Route::post('/logout', function () {
    Auth::logout();
    return redirect('/template'); // Mengarahkan ke landing page
})->name('logout');

Route::resource('pastries', PastryController::class)->middleware('auth');

// Route::resource('pastries', PastryController::class);


Route::middleware(['auth'])->group(function () {
    Route::resource('pastries', PastryController::class);
});

Route::get('/dashboard', function () {
    return view('dashboard');
})->middleware(['auth'])->name('dashboard');


// Route::get('/pastries', function () {
//     $pastries = Pastry::all();
//     return view('landing', compact('pastries'));
// });
// routes/web.php


Route::middleware(['auth', 'admin'])->prefix('admin')->name('admin.')->group(function () {
    // Halaman index untuk menampilkan semua data pastry
    Route::get('/pastries', [PastryController::class, 'index'])->name('pastries.index');
    Route::get('/user/pastries', [PastryController::class, 'userIndex'])->name('user.pastries.index');
    // Halaman create untuk form tambah pastry baru
    Route::get('/pastries/create', [PastryController::class, 'create'])->name('pastries.create');

    // Route untuk menyimpan data pastry baru
    Route::post('/pastries', [PastryController::class, 'store'])->name('pastries.store');

    // Halaman edit untuk form edit pastry
    Route::get('/pastries/{pastry}/edit', [PastryController::class, 'edit'])->name('pastries.edit');

    // Route untuk update data pastry
    Route::put('/pastries/{pastry}', [PastryController::class, 'update'])->name('pastries.update');

    // Route untuk menghapus data pastry
    Route::delete('/pastries/{pastry}', [PastryController::class, 'destroy'])->name('pastries.destroy');
});
