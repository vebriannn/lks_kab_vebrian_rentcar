<?php

use Illuminate\Support\Facades\Route;

// controller admin

use App\Http\Controllers\Admin\LoginController;
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
    return view('index');
})->name('home');

Route::get('/cars', [DashboardController::class, 'viewcars'])->name('mobil');

Route::get('/contact', function () {
    return view('contact');
})->name('contact');


// admin login
Route::get('/admin/login', [LoginController::class, 'index'])->name('admin.login');
Route::post('/admin/login', [LoginController::class, 'authenticate'])->name('admin.login.auth');

// admin regsiter
Route::view('/admin/register', 'admin.register')->name('admin.register');
Route::post('/admin/register', [LoginController::class, 'created'])->name('admin.register.process');

// admin middleware
Route::group(['prefix' => 'admin', 'middleware' => 'admin.middleware'], function () {
    Route::get('/', [DashboardController::class, 'index'])->name('admin.dashboard');

    // add cars
    Route::view('/add', 'admin.pages.tambah')->name('admin.add.data');
    Route::post('/add', [DashboardController::class, 'create'])->name('admin.add.data.process');

    // delete cars
    Route::get('/delete/{id}', [DashboardController::class, 'destroy'])->name('admin.delete.data');
});;
