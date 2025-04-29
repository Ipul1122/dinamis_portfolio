<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\User\HomeUserController;
use App\Http\Controllers\User\AboutController as UserAboutController;
use App\Http\Controllers\User\SkillUserController;
use App\Http\Controllers\User\ContactUserController;

// Admin
use App\Http\Controllers\Admin\HomeAdminController;
use App\Http\Controllers\Admin\AboutController; 
use App\Http\Controllers\Admin\WorkExperienceController;
use App\Http\Controllers\Admin\ScientExperienceController;
use App\Http\Controllers\Admin\SkillAdminController;
use App\Http\Controllers\Admin\ContactAdminController;


// Route::get('/', function () {
//     return view('welcome');
// });


// USER
Route::get('/', [HomeUserController::class, 'index'])->name('home');
Route::get('/about', [UserAboutController::class, 'index'])->name('about');
Route::get('/experience/work', [WorkExperienceController::class, 'userWork'])->name('user.experience.work');
Route::get('/experience/scient', [ScientExperienceController::class, 'userScient'])->name('user.experience.scient');
Route::get('/skills', [SkillUserController::class, 'showSkills'])->name('user.skills');
Route::get('/contact', [ContactUserController::class, 'index'])->name('user.contact');
Route::post('/contact', [ContactUserController::class, 'store'])->name('user.contact.store');





/* =========================================================
ADMIN ROUTE
========================================================= */
// Admin Route
Route::prefix('admin')->name('admin.')->group(function () {
    // Home Admin
    Route::get('/home', [HomeAdminController::class, 'index'])->name('home.index');
    Route::get('/home/edit', [HomeAdminController::class, 'edit'])->name('home.edit');
    Route::post('/home/update', [HomeAdminController::class, 'update'])->name('home.update');

    // About Admin
    Route::get('/about', [AboutController::class, 'index'])->name('about.index');
    Route::get('/about/create', [AboutController::class, 'create'])->name('about.create');
    Route::post('/about', [AboutController::class, 'store'])->name('about.store');
    Route::get('/about/{id}/edit', [AboutController::class, 'edit'])->name('about.edit');
    Route::put('/about/{id}', [AboutController::class, 'update'])->name('about.update');
    Route::delete('/about/{id}', [AboutController::class, 'destroy'])->name('about.destroy');

    // WORK EXPERIENCE
    Route::get('/experience/work', [WorkExperienceController::class, 'index'])->name('experience.work.index');
    Route::get('/experience/work/create', [WorkExperienceController::class, 'create'])->name('experience.work.create');
    Route::post('/work', [WorkExperienceController::class, 'store'])->name('experience.work.store');
    Route::get('/experience/work/{id}/edit', [WorkExperienceController::class, 'edit'])->name('experience.work.edit');
    Route::put('/work/{id}', [WorkExperienceController::class, 'update'])->name('experience.work.update');
    Route::delete('/work/{id}', [WorkExperienceController::class, 'destroy'])->name('experience.work.destroy');

    // SCIENT EXPERIENCE
    Route::get('/experience/scient', [ScientExperienceController::class, 'index'])->name('experience.scient.index');
    Route::get('/experience/scient/create', [ScientExperienceController::class, 'create'])->name('experience.scient.create');
    Route::post('/store', [ScientExperienceController::class, 'store'])->name('experience.scient.store');
    Route::get('/experience/scient/{id}/edit', [ScientExperienceController::class, 'edit'])->name('experience.scient.edit');
    Route::put('/scient/{id}', [ScientExperienceController::class, 'update'])->name('experience.scient.update');
    Route::delete('/scient/{id}', [ScientExperienceController::class, 'destroy'])->name('experience.scient.destroy');

    // SKILL
    Route::get('/skills', [SkillAdminController::class, 'index'])->name('skills.index');
    Route::get('/skills/create', [SkillAdminController::class, 'create'])->name('skills.create');
    Route::post('/skills', [SkillAdminController::class, 'store'])->name('skills.store');
    Route::get('/skills/{id}/edit', [SkillAdminController::class, 'edit'])->name('skills.edit');
    Route::put('/skills/{id}', [SkillAdminController::class, 'update'])->name('skills.update');
    Route::delete('/skills/{id}', [SkillAdminController::class, 'destroy'])->name('skills.destroy');

    // CONTACT
    Route::get('/contact', [ContactAdminController::class, 'index'])->name('contact.index');
});