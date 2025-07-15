<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ProductController;
use App\Http\Controllers\CategoryController;
use App\Http\Controllers\PageController;
use App\Http\Controllers\Admin\AuthController;
use App\Http\Controllers\AdminController;
use App\Http\Controllers\TestimoniController;
use App\Http\Controllers\KeunggulanController;
use App\Http\Controllers\GaleriController;
use App\Http\Controllers\Auth\LoginController;
use App\Http\Controllers\Auth\RegisterController;

/*
|--------------------------------------------------------------------------
| Frontend Routes
|--------------------------------------------------------------------------
*/
Route::get('/', [ProductController::class, 'landing'])->name('beranda');
Route::get('/katalog', [ProductController::class, 'index'])->name('katalog');
Route::get('/katalog/{id}', [ProductController::class, 'show'])->name('produk.detail');
Route::view('/kontak', 'pages.kontak')->name('kontak');
Route::view('/tentang', 'pages.tentang')->name('tentang');
Route::view('/keunggulan', 'pages.kenunggulan')->name('keunggulan');

Route::get('/testimoni', [TestimoniController::class, 'index'])->name('testimoni');
Route::get('/galeri', [GaleriController::class, 'index'])->name('galeri');

/*
|--------------------------------------------------------------------------
| Admin Auth Routes
|--------------------------------------------------------------------------
*/
Route::prefix('admin')->name('admin.')->group(function () {
    Route::get('/login', [AuthController::class, 'showLoginForm'])->name('login');
    Route::post('/login', [AuthController::class, 'login']);
    Route::post('/logout', [AuthController::class, 'logout'])->name('logout');
    Route::get('/register', [AuthController::class, 'showRegisterForm'])->name('register');
    Route::post('/register', [AuthController::class, 'register']);

    /*
    |--------------------------------------------------------------------------
    | Admin Protected Routes (auth:admin middleware)
    |--------------------------------------------------------------------------
    */
    Route::middleware('auth:admin')->group(function () {

        Route::get('/dashboard', [AdminController::class, 'index'])->name('dashboard');

        // Produk
        Route::get('/produk/create', [ProductController::class, 'create'])->name('produk.create');
        Route::post('/produk/store', [ProductController::class, 'store'])->name('produk.store');
        Route::get('/produk/{id}/edit', [ProductController::class, 'edit'])->name('produk.edit');
        Route::put('/produk/{id}', [ProductController::class, 'update'])->name('produk.update');
        Route::delete('/produk/{id}', [ProductController::class, 'destroy'])->name('produk.destroy');
        Route::get('/produk', [ProductController::class, 'adminIndex'])->name('produk.index');

        // Kategori
        Route::get('/kategori', [CategoryController::class, 'index'])->name('kategori.index');
        Route::get('/kategori/create', [CategoryController::class, 'create'])->name('kategori.create');
        Route::post('/kategori/store', [CategoryController::class, 'store'])->name('kategori.store');
        Route::get('/kategori/{id}/edit', [CategoryController::class, 'edit'])->name('kategori.edit');
        Route::put('/kategori/{id}', [CategoryController::class, 'update'])->name('kategori.update');
        Route::delete('/kategori/{id}', [CategoryController::class, 'destroy'])->name('kategori.destroy');

        // Halaman statis
        Route::get('/halaman', [PageController::class, 'index'])->name('halaman.index');
        Route::get('/halaman/{id}/edit', [PageController::class, 'edit'])->name('halaman.edit');
        Route::put('/halaman/{id}', [PageController::class, 'update'])->name('halaman.update');

        // Testimoni
        Route::get('/testimoni', [TestimoniController::class, 'adminIndex'])->name('testimoni.index');
        Route::get('/testimoni/create', [TestimoniController::class, 'create'])->name('testimoni.create');
        Route::post('/testimoni/store', [TestimoniController::class, 'store'])->name('testimoni.store');
        Route::get('/testimoni/{id}/edit', [TestimoniController::class, 'edit'])->name('testimoni.edit');
        Route::put('/testimoni/{id}', [TestimoniController::class, 'update'])->name('testimoni.update');
        Route::delete('/testimoni/{id}', [TestimoniController::class, 'destroy'])->name('testimoni.destroy');

        // Keunggulan
        Route::get('/keunggulan', [KeunggulanController::class, 'adminIndex'])->name('keunggulan.index');
        Route::get('/keunggulan/create', [KeunggulanController::class, 'create'])->name('keunggulan.create');
        Route::post('/keunggulan/store', [KeunggulanController::class, 'store'])->name('keunggulan.store');
        Route::get('/keunggulan/{id}/edit', [KeunggulanController::class, 'edit'])->name('keunggulan.edit');
        Route::put('/keunggulan/{id}', [KeunggulanController::class, 'update'])->name('keunggulan.update');
        Route::delete('/keunggulan/{id}', [KeunggulanController::class, 'destroy'])->name('keunggulan.destroy');

        // Galeri
        Route::get('/galeri', [GaleriController::class, 'adminIndex'])->name('galeri.index');
        Route::get('/galeri/upload', [GaleriController::class, 'create'])->name('galeri.create');
        Route::post('/galeri/store', [GaleriController::class, 'store'])->name('galeri.store');
        Route::delete('/galeri/{id}', [GaleriController::class, 'destroy'])->name('galeri.destroy');
    });
});

Route::get('/login', [LoginController::class, 'showLoginForm'])->name('login');
Route::post('/login', [LoginController::class, 'login']);
Route::post('/logout', [LoginController::class, 'logout'])->name('logout');

Route::get('/register', [RegisterController::class, 'showRegistrationForm'])->name('register');
Route::post('/register', [RegisterController::class, 'register']);
