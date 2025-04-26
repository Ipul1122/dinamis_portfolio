<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\User\HomeUserController;
use App\Http\Controllers\User\AboutController as UserAboutController;

// Admin
use App\Http\Controllers\Admin\HomeAdminController;
use App\Http\Controllers\Admin\AboutController; 
use App\Http\Controllers\Admin\WorkExperienceController;
use App\Http\Controllers\Admin\ScientExperienceController;

// Route::get('/', function () {
//     return view('welcome');
// });


// USER
Route::get('/', [HomeUserController::class, 'index'])->name('home');
Route::get('/about', [UserAboutController::class, 'index'])->name('about');
Route::get('/experience/work', [WorkExperienceController::class, 'userWork'])->name('user.experience.work');
Route::get('/experience/scient', [ScientExperienceController::class, 'userScient'])->name('user.experience.scient');



/* =========================================================
ADMIN ROUTE
========================================================= */
// Admin Route
Route::prefix('admin')->name('admin.')->group(function () {
    // Home Admin
    Route::get('/home', [HomeAdminController::class, 'index'])->name('home.index');
    Route::get('/home/edit', [HomeAdminController::class, 'edit'])->name('home.edit');
    Route::post('/home/update', [HomeAdminController::class, 'update'])->name('home.update');

    // Route untuk halaman index
    Route::get('/about', [AboutController::class, 'index'])->name('about.index');
    // Route untuk membuat data baru
    Route::get('/about/create', [AboutController::class, 'create'])->name('about.create');
    // Route untuk menyimpan data baru
    Route::post('/about', [AboutController::class, 'store'])->name('about.store');
    // Route untuk mengedit data
    Route::get('/about/{id}/edit', [AboutController::class, 'edit'])->name('about.edit');
    // Route untuk update data
    Route::put('/about/{id}', [AboutController::class, 'update'])->name('about.update');
    // Route untuk menghapus data
    Route::delete('/about/{id}', [AboutController::class, 'destroy'])->name('about.destroy');
});

// WORK EXPERIENCE
Route::prefix('admin/experience/work')->name('admin.experience.work.')->group(function () {
    Route::get('/', [WorkExperienceController::class, 'index'])->name('index');
    Route::get('/create', [WorkExperienceController::class, 'create'])->name('create');
    Route::post('/store', [WorkExperienceController::class, 'store'])->name('store');
    Route::get('/edit/{id}', [WorkExperienceController::class, 'edit'])->name('edit');
    Route::put('/update/{id}', [WorkExperienceController::class, 'update'])->name('update');
    Route::delete('/destroy/{id}', [WorkExperienceController::class, 'destroy'])->name('destroy');
});

// SCIENT EXPERIENCE
Route::prefix('admin/experience/scient')->name('admin.experience.scient.')->group(function () {
    Route::get('/', [ScientExperienceController::class, 'index'])->name('index');
    Route::get('/create', action: [ScientExperienceController::class, 'create'])->name('create');
    Route::post('/store', [ScientExperienceController::class, 'store'])->name('store');
    Route::get('/edit/{id}', [ScientExperienceController::class, 'edit'])->name('edit');
    Route::put('/update/{id}', [ScientExperienceController::class, 'update'])->name('update');
    Route::delete('/destroy/{id}', [ScientExperienceController::class, 'destroy'])->name('destroy');
});

