<?php

use App\Http\Controllers\BooksPhoriaController;
use App\Http\Controllers\CategoriesController;
use App\Http\Controllers\TermsController;
use App\Http\Controllers\AuthController;
use App\Http\Controllers\PrivacyController;
use App\Http\Controllers\CurrentController;
use App\Http\Controllers\CopyrightController;
use App\Http\Controllers\ProsedurController;
use App\Http\Controllers\UserController;
use App\Http\Controllers\ProfileController;
use Illuminate\Support\Facades\Route;

Route::get('/', [AuthController::class, 'login'])->name('login');
Route::get('/login', [AuthController::class, 'login'])->name('login.index');
Route::post('/login', [AuthController::class, 'login2'])->name('login.proses');
Route::get('/register', [AuthController::class, 'register'])->name('register.index');
Route::post('/register', [AuthController::class, 'register2'])->name('register.proses');

Route::middleware(['auth'])->group(function () {
    
    Route::post('/logout', [AuthController::class, 'logout'])->name('logout');
    Route::get('/profile', [UserController::class, 'profile'])->name('user.profile');
    Route::put('/profile/update', [UserController::class, 'updateProfile'])->name('user.update_profile');

    Route::middleware(['checkRole:admin'])->group(function () {

        Route::get('/books', [BooksPhoriaController::class, 'index'])->name('books.index');
        Route::get('/books/create', [BooksPhoriaController::class, 'create'])->name('books.create');
        Route::post('/books/create', [BooksPhoriaController::class, 'store'])->name('books.store');
        Route::get('/books/{id_buku}/edit', [BooksPhoriaController::class, 'edit'])->name('books.edit');
        Route::put('/books/{id_buku}', [BooksPhoriaController::class, 'update'])->name('books.update');
        Route::delete('/books/{id_buku}', [BooksPhoriaController::class, 'destroy'])->name('books.destroy');

        Route::get('/categories', [CategoriesController::class, 'index'])->name('categories.index');
        Route::get('/categories/create', [CategoriesController::class, 'create'])->name('categories.create');
        Route::post('/categories/create', [CategoriesController::class, 'store'])->name('categories.store');
        Route::get('/categories/{id_kategori}/edit', [CategoriesController::class, 'edit'])->name('categories.edit');
        Route::put('/categories/{id_kategori}', [CategoriesController::class, 'update'])->name('categories.update');
        Route::delete('/categories/{id_kategori}', [CategoriesController::class, 'destroy'])->name('categories.destroy');

        Route::get('/current', [CurrentController::class, 'index'])->name('current.index');
        Route::put('/current/{id}/update', [CurrentController::class, 'update'])->name('current.update');
        Route::get('/terms', [TermsController::class, 'index'])->name('terms.index');
        Route::get('/copyright', [CopyrightController::class, 'index'])->name('copyright.index');
        Route::get('/privacy', [PrivacyController::class, 'index'])->name('privacy.index');
        Route::get('/prosedur', [ProsedurController::class, 'index'])->name('prosedur.index');
    });

    Route::middleware(['checkRole:user'])->prefix('user')->group(function () {
        Route::get('/', [UserController::class, 'index'])->name('user.index');
        Route::get('/myloans', [UserController::class, 'myloans'])->name('user.myloans');
        Route::get('/pinjam/{id}', [UserController::class, 'pinjam'])->name('user.pinjam');
        Route::post('/store', [UserController::class, 'store'])->name('user.store');
        Route::get('/terms', [TermsController::class, 'terms'])->name('user.terms');
        Route::get('/copyright', [CopyrightController::class, 'copyright'])->name('user.copyright');
        Route::get('/privacy', [PrivacyController::class, 'privacy'])->name('user.privacy');
        Route::get('/prosedur', [ProsedurController::class, 'prosedur'])->name('user.prosedur');
    });
});