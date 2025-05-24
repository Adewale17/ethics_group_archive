<?php

use App\Http\Controllers\AdminsController;
use App\Http\Controllers\ProfileController;
use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('index');
})->name('index');

Route::get('/dashboard', function () {
    return view('dashboard');
})->middleware(['auth', 'verified'])->name('dashboard');

Route::middleware('auth')->group(function () {
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
});


Route::post('/admin/logout', [AdminsController::class, 'logout'])->name('adminLogout');

Route::middleware(['web', 'check.auth'])->prefix('admin')->group(function () {
    Route::get('/login', [AdminsController::class, 'viewLogin'])->name('viewLogin');
    Route::post('/login', [AdminsController::class, 'checkLogin'])->name('checkLogin');
});
Route::middleware(['web', 'auth.admin'])->prefix('admin')->group(function () {
    Route::get('/index', [AdminsController::class, 'index'])->name('adminDashboard');
});


require __DIR__ . '/auth.php';
