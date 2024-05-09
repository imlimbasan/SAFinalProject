<?php

use App\Http\Controllers\ProfileController;
use App\Http\Controllers\testblog;
use App\Http\Controllers\aboutus;
use App\Http\Controllers\viewAboutUs;
use App\Http\Controllers\AuthController;
use Illuminate\Support\Facades\Route;


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

// Route::get('/', function () {
//     return view('welcome');
// });

Route::get('/', [testblog::class, 'index'])-> name('index');
Route::get('/aboutus', [aboutus::class, 'aboutus']);

// Route::get('/dashboard', function () {
//     return view('dashboard');
// })->middleware(['auth', 'verified'])->name('dashboard');

// Route::middleware('auth')->group(function () {
//     Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
//     Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
//     Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
// });

// require __DIR__.'/auth.php';


Route::get('/aboutus', [aboutus::class, 'aboutus']);

Route::get('/register', [AuthController::class, 'register']) -> name('register');

Route::post('/registerStore', [AuthController::class, 'store'])->name('register.store');


Route::get('/login', [AuthController::class, 'login']) -> name('login');

Route::post('/login', [AuthController::class, 'authenticate']);


Route::post('/logout', [AuthController::class, 'logout'])-> name('logout');


use App\Http\Controllers\UserController;


Route::get('/profil/{id}', [UserController::class, 'show'])-> name('show');
Route::get('/profil/{id}/edit', [UserController::class, 'edit'])-> name('edit');
Route::put('/profil/{id}', [UserController::class, 'update'])-> name('profil.update');
Route::get('/profil/{id}/change-password', [UserController::class, 'changePassword'])-> name('profil.change-password');
Route::put('/profil/{id}/change-password', [UserController::class, 'updatePassword'])-> name('profil.change-password');

Route::get('/profil', [AuthController::class, 'profile'])->name('profil');
