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

Route::get('/categories/create', [CategoryController::class, 'createForm'])->name('categories.create');
Route::post('/categories/store', [CategoryController::class, 'store'])->name('categories.store');
Route::get('/categories', [CategoryController::class, 'index'])->name('categories.index');
Route::delete('/categories/{id}', [CategoryController::class, 'destroy'])->name('categories.destroy');

Route::get('/offres/create', [OffreController::class, 'createForm'])->name('offres.create');
Route::post('/offres/store', [OffreController::class, 'store'])->name('offres.store');
Route::get('/offres/index', [OffreController::class, 'index'])->name('offres.index');
Route::get('/offres/destroy', [OffreController::class, 'destroy'])->name('offres.destroy');

Route::get('offres/{offre}/edit', 'OffreController@edit')->name('offres.edit');
#Route::get('categories/{categorie_id}/offres', 'OffreController@getOffresByCategory');
#Route::get('categories/{categorie_id}/offres', [OffreController::class, 'getOffresByCategory']);

//Route::get('/offres/category/{categorie_id}', [OffreController::class, 'getOffresByCategory'])
    //->name('offres.category');
    //Route::get('/offres-par-categorie/{categorie}', 'OffreController@offresParCategorie')->name('offres.par.categorie');
    //Route::get('/categories/{categorie_id}/offres', 'OffreController@offresByCategory')->name('offres.category');


    Route::get('/categories/{categorie_id}/offres', [OffreController::class, 'offresByCategory'])->name('offres.category');


//Route::get('/offres/show', [OffreController::class, 'show'])->name('offresshow');
Route::resource('offres', OffreController::class);
Route::get('/offres', [OffreController::class, 'show'])->name('offresshow');
Route::get('/', [OffreController::class, 'show'])->name('offresshow');
Route::get('/welcome', [OffreController::class, 'welcome'])->name('welcome');

use App\Http\Controllers\EntrepriseController;

Route::get('/entreprise/index', [EntrepriseController::class, 'index'])->name('entreprise.index');

Route::get('/', [CategoryController::class, 'show'])->name('home');
