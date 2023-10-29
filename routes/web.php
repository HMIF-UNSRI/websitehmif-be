<?php

use App\Http\Controllers\Admin\AuthController;
use App\Http\Controllers\Admin\ArticleController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Admin\DashboardController;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/

Route::get('/', function () {
    return redirect()->route('dashboard.index');
});


Route::middleware('guest')->group(function () {
    Route::get('/login', [AuthController::class, 'index'])->name('login.index');
    Route::post('/login', [AuthController::class, 'login'])->name('login');
});

Route::middleware('auth')->group(function () {
    Route::get('/logout', [AuthController::class, 'logout'])->name('logout');

    Route::get('/dashboard', [DashboardController::class, 'index'])->name('dashboard.index');
    Route::get('/berita', [ArticleController::class, 'index'])->name('article.index');
    Route::get('/berita/create', [ArticleController::class, 'create'])->name('article.create');
    Route::post('/berita', [ArticleController::class, 'store'])->name('article.store');
    Route::get('/berita/{slug}/show', [ArticleController::class, 'show'])->name('article.show');
    Route::get('/berita/{slug}/edit', [ArticleController::class, 'edit'])->name('article.edit');
    Route::put('/berita/{slug}', [ArticleController::class, 'update'])->name('article.update');
    Route::delete('/berita/{slug}', [ArticleController::class, 'delete'])->name('article.delete');
});


