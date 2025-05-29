<?php

use App\Http\Controllers\AdminsController;
use App\Http\Controllers\EthicsController;
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
    //Ethics Group
    Route::get('/igbo', [EthicsController::class, 'igbo'])->name('igbo');
    Route::get('/igbo/{id}', [EthicsController::class, 'igboShow'])->name('igbo.show');
    Route::get('/yoruba', [EthicsController::class, 'yoruba'])->name('yoruba');
    Route::get('/yoruba/{id}', [EthicsController::class, 'yorubaShow'])->name('yoruba.show');
    Route::get('/hausa', [EthicsController::class, 'hausa'])->name('hausa');
    Route::get('/hausa/{id}', [EthicsController::class, 'hausaShow'])->name('hausa.show');
});


Route::post('/admin/logout', [AdminsController::class, 'logout'])->name('adminLogout');

Route::middleware(['web', 'check.auth'])->prefix('admin')->group(function () {
    Route::get('/login', [AdminsController::class, 'viewLogin'])->name('viewLogin');
    Route::post('/login', [AdminsController::class, 'checkLogin'])->name('checkLogin');
});

Route::middleware(['web', 'auth.admin'])->prefix('admin')->group(function () {
    Route::get('/index', [AdminsController::class, 'index'])->name('adminDashboard');
    //Admins
    Route::get('/all-admins', [AdminsController::class, 'allAdmins'])->name('allAdmins');
    Route::get('/admins-create', [AdminsController::class, 'createAdmins'])->name('create.admins');
    Route::post('/admins-create', [AdminsController::class, 'storeAdmins'])->name('store.admins');
    Route::post('/delete-admin/{id}', [AdminsController::class, 'deleteAdmin'])->name('delete.admin');

    //create Archive
    Route::get('/all-archives', [AdminsController::class, 'allArchives'])->name('all.archives');
    Route::get('/create-archive', [AdminsController::class, 'createArchive'])->name('create.archives');
    Route::post('/create-archive', [AdminsController::class, 'storeArchive'])->name('store.archives');
    Route::get('/edit-archive/{id}', [AdminsController::class, 'editArchive'])->name('edit.archives');
    Route::put('/edit-archive/{id}', [AdminsController::class, 'updateArchive'])->name('update.archives');
    Route::post('/delete-archive/{id}', [AdminsController::class, 'deleteArchive'])->name('delete.archive');


});


require __DIR__ . '/auth.php';
