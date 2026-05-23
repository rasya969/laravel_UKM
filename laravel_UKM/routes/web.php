<?php

use App\Http\Controllers\ExperienceController;
use App\Http\Controllers\KategoriExperienceController;
use App\Http\Controllers\PendidikanController;
use App\Http\Controllers\ProjectController;
use App\Http\Controllers\SertifikatController;
use App\Http\Controllers\SkillController;
use App\Http\Controllers\TechStackController;
use App\Models\Sertifikat;
use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome');
})->name('home');

Route::get('/about', function() {
    return view('pages.about');
})->name('about');

Route::get('/main', function() {
    return view('pages.admin.main');
})->name('main');

//Routes admin
Route::resource('experiences', ExperienceController::class); 
Route::resource('kategori-experiences', KategoriExperienceController::class);
Route::resource('pendidikans', PendidikanController::class);
Route::resource('projects', ProjectController::class);
Route::resource('sertifikats', SertifikatController::class);
Route::resource('skills', SkillController::class);
Route::resource('tech-stacks', TechStackController::class);

//Routes guest