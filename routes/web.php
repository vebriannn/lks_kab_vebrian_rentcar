<?php

use Illuminate\Support\Facades\Route;

// controller admin

use App\Http\Controllers\Admin\LoginController;
use App\Http\Controllers\Admin\DashboardController;
use Illuminate\Auth\Events\Login;

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
    return view('index');
})->name('home');

Route::get('/mobil', function () {
    return view('mobil');
})->name('mobil');
Route::get('/contact', function () {
    return view('contact');
})->name('contact');


// admin login
Route::get('/admin/login', [LoginController::class, 'index'])->name('admin.login');
Route::post('/admin/login', [LoginController::class, 'authenticate'])->name('admin.login.auth');

// admin middleware
Route::group(['prefix' => 'admin', 'middleware' => 'admin.middleware'], function () {
    Route::get('/', [DashboardController::class, 'index'])->name('admin.dashboard');
    Route::view('/add', 'admin.pages.tambah')->name('admin.add.data');
    Route::get('/delete/{id}', [DashboardController::class, 'destroyer'])->name('admin.delete.data');
});;
