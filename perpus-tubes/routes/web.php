<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\loginController;
use App\Http\Controllers\DashboardController;
use App\Http\Controllers\AuthorController;

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
});
