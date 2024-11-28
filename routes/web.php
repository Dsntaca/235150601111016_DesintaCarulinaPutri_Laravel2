<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\AuthController;
use App\Http\Controllers\DashboardController;
use App\Http\Controllers\BlogController;


/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::get('/', function () {
    return view('welcome');
})->name('welcome');

Route::get('/register', [AuthController::class, 'showRegisterForm'])->name('register');
Route::post('/register', [AuthController::class, 'register']);

Route::get('/login', [AuthController::class, 'showLoginForm'])->name('login');
Route::post('/login', [AuthController::class, 'login']);
Route::post('/logout', [AuthController::class, 'logout'])->name('logout');

Route::get('/dashboard', [DashboardController::class, 'index'])->name('dashboard')->middleware('auth');

Route::get('/blogs', [BlogController::class, 'index'])->name('list.blogs');
Route::get('/blogs/create', [BlogController::class, 'create'])->name('create.blogs');

Route::post('/blogs', [BlogController::class, 'store'])->name('store.blogs');
Route::get('/blogs/{id}/edit', [BlogController::class, 'edit'])->name('edit.blogs');

Route::put('/blogs/{id}', [BlogController::class, 'update'])->name('update.blogs');
Route::delete('/blogs/{id}', [BlogController::class, 'destroy'])->name('delete.blogs');