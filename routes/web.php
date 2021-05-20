<?php

use App\Http\Controllers\HomeController;
use App\Http\Controllers\AdminController;
use App\Http\Controllers\Auth\LoginController;
use App\Http\Controllers\Auth\RegisterController;
use App\Http\Controllers\Auth\AdminLoginController;
use Illuminate\Support\Facades\Route;

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

Route::get('login', [ LoginController::class, 'showLogin' ])->name('login.show');
Route::post('login', [ LoginController::class, 'login'])->name('login.submit');
Route::get('logout', [ LoginController::class, 'logout'])->name('logout');

Route::get('register', [ RegisterController::class, 'showRegister' ])->name('register.show');
Route::post('register', [ RegisterController::class, 'register' ])->name('register.submit');

Route::prefix('admin')->group(function () {
    Route::get('login', [ AdminLoginController::class, 'showLogin'])->name('admin.login.show');
    Route::post('login', [ AdminLoginController::class, 'login'])->name('admin.login.submit');

    Route::get('', [ AdminController::class, 'index' ])->name('admin.dashboard');
});

Route::get('/', [ HomeController::class, 'index'])->name('home.index');
