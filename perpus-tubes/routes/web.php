<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\loginController;
use App\Http\Controllers\DashboardController;
use App\Http\Controllers\AuthorController;
use App\Http\Controllers\PublisherController;
use App\Http\Controllers\CategoryController;
use App\Http\Controllers\BookController;

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
    return view('home');
});

Route::get('/login', [loginController::class, 'index'])->name('login');
Route::post('/login', [loginController::class, 'login']);
Route::get('/logout', [loginController::class, 'logout'])->name('logout');
// Route Group untuk mengamankan route yang perlu diproteksi dengan login
Route::group(['middleware' => ['auth']], function () {
    Route::get('/dashboard', [DashboardController::class, 'index'])->name('dashboard');
    //crud author
    Route::get('/admin/author', [AuthorController::class, 'index'])->name('admin.author.index');
    Route::get('/admin/author/create', [AuthorController::class, 'create'])->name('admin.author.create');
    Route::post('/admin/author', [AuthorController::class, 'store'])->name('admin.author.store');
    Route::get('/admin/author/{id}/edit', [AuthorController::class, 'edit'])->name('admin.author.edit');
    Route::put('/admin/author/{id}', [AuthorController::class, 'update'])->name('admin.author.update');
    Route::delete('/admin/author/{id}', [AuthorController::class, 'destroy'])->name('admin.author.destroy');
    //Spesific Method Author
    Route::get('/admin/author/{id}/show', [AuthorController::class, 'show'])->name('admin.author.show');
    //crud publisher
    Route::get('/admin/publisher', [PublisherController::class, 'index'])->name('admin.publisher.index');
    Route::get('/admin/publisher/create', [PublisherController::class, 'create'])->name('admin.publisher.create');
    Route::post('/admin/publisher', [PublisherController::class, 'store'])->name('admin.publisher.store');
    Route::get('/admin/publisher/{id}/edit', [PublisherController::class, 'edit'])->name('admin.publisher.edit');
    Route::put('/admin/publisher/{id}', [PublisherController::class, 'update'])->name('admin.publisher.update');
    Route::delete('/admin/publisher/{id}', [PublisherController::class, 'destroy'])->name('admin.publisher.destroy');
    //crud category
    Route::get('/admin/category', [CategoryController::class, 'index'])->name('admin.category.index');
    Route::get('/admin/category/create', [CategoryController::class, 'create'])->name('admin.category.create');
    Route::post('/admin/category', [CategoryController::class, 'store'])->name('admin.category.store');
    Route::get('/admin/category/{id}/edit', [CategoryController::class, 'edit'])->name('admin.category.edit');
    Route::put('/admin/category/{id}', [CategoryController::class, 'update'])->name('admin.category.update');
    Route::delete('/admin/category/{id}', [CategoryController::class, 'destroy'])->name('admin.category.destroy');
    //Spesific Method Category
    Route::get('/admin/category/{id}/show', [CategoryController::class, 'show'])->name('admin.category.show');
    //crud books
    Route::get('/admin/book', [BookController::class, 'index'])->name('admin.book.index');
    Route::get('/admin/book/create', [BookController::class, 'create'])->name('admin.book.create');
    Route::post('/admin/book', [BookController::class, 'store'])->name('admin.book.store');
    Route::get('/admin/book/{id}/edit', [BookController::class, 'edit'])->name('admin.book.edit');
    Route::put('/admin/book/{id}', [BookController::class, 'update'])->name('admin.book.update');
    Route::delete('/admin/book/{id}', [BookController::class, 'destroy'])->name('admin.book.destroy');
    //Spesific Method Book
    Route::get('/admin/book/{id}/show', [BookController::class, 'show'])->name('admin.book.show');
});
