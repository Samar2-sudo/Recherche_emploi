<?php

use App\Http\Controllers\EntrepriseAuthController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\CategoryController;
use App\Http\Controllers\OffreController;
use App\Http\Controllers\UserController;


Route::get('/', function () {
    return view('welcome');
});

Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');

Route::post('/logout', [App\Http\Controllers\Auth\LoginController::class, 'logout'])->name('logout');

Route::get('/dashboard', function () {
    // Logic for the dashboard
})->middleware('auth');

Route::get('/users', [UserController::class, 'index'])->name('users.index');
Route::delete('/users/{id}', [UserController::class, 'destroy'])->name('users.destroy');

// Debug route
Route::get('debug/register/entreprise', [EntrepriseAuthController::class, 'showRegistrationForm']);


// Registration Route
Route::get('register/entreprise', [EntrepriseAuthController::class, 'showRegistrationForm'])->name('entreprise.register');
Route::post('register/entreprise', [EntrepriseAuthController::class, 'register']);

// Login Route
Route::get('login/entreprise', [EntrepriseAuthController::class, 'showLoginForm'])->name('entreprise.login');
Route::post('login/entreprise', [EntrepriseAuthController::class, 'login']);

// Dashboard Route
Route::get('/dashboard/entreprise', function () {
    // Logic for entreprise dashboard
})->middleware(['auth', 'check.entreprise.login']);

// routes/web.php


// routes/web.php


// routes/web.php
Route::get('/categories/create', [CategoryController::class, 'createForm'])->name('categories.create');
Route::post('/categories/store', [CategoryController::class, 'store'])->name('categories.store');
Route::get('/categories', [CategoryController::class, 'index'])->name('categories.index');
Route::delete('/categories/{id}', [CategoryController::class, 'destroy'])->name('categories.destroy');


Route::get('/offres/create', [OffreController::class, 'createForm'])->name('offres.create');
Route::post('/offres/store', [OffreController::class, 'store'])->name('offres.store');
Route::get('/offres/index', [OffreController::class, 'index'])->name('offres.index');
Route::get('/offres/destroy', [OffreController::class, 'destroy'])->name('offres.destroy');

// routes/web.php

use App\Http\Controllers\EntrepriseController;

Route::get('/entreprise/index', [EntrepriseController::class, 'index'])->name('entreprise.index');
