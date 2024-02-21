<?php

use Illuminate\Support\Facades\Route;

// controller admin

use App\Http\Controllers\Admin\LoginController;
use App\Http\Controllers\Admin\DashboardController;
use App\Http\Controllers\Member\LoginController as MemberLoginController;
use App\Http\Controllers\Member\DashboardController as MemberDashboardController;

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




// halaman non login
Route::get('/', [MemberDashboardController::class, 'index'])->name('home');
Route::get('/cars', [MemberDashboardController::class, 'showcars'])->name('mobil');
Route::post('/cars', [MemberDashboardController::class, 'getcars'])->name('getcars');
Route::view('/contact', 'contact')->name('contact');



// ROUTES ADMIN

// memeber
Route::group(['prefix' => 'member', 'middleware' => 'auth'], function () {
    Route::get('/cars/sewa/{id}', [MemberDashboardController::class, 'sewa'])->name('member.sewacars');
    Route::post('/transaction', [MemberDashboardController::class, 'create'])->name('member.transaction');
    Route::view('/cars/success','Member.pages.success')->name('member.succescars');

    // logout
    Route::get('/logout', [MemberLoginController::class, 'logout'])->name('member.logout');
});;


// member login
Route::get('/member/login', [MemberLoginController::class, 'index'])->name('member.login');
Route::post('/member/login', [MemberLoginController::class, 'authenticate'])->name('member.login.auth');

// member regsiter
Route::view('/member/register', 'member.register')->name('member.register');
Route::post('/member/register', [LoginController::class, 'created'])->name('member.register.process');




// ROUTES ADMIN

// admin login
Route::get('/admin/login', [LoginController::class, 'index'])->name('admin.login');
Route::post('/admin/login', [LoginController::class, 'authenticate'])->name('admin.login.auth');

// admin register
Route::view('/admin/register', 'admin.register')->name('admin.register');
Route::post('/admin/register', [LoginController::class, 'created'])->name('admin.register.process');


// admin middleware
Route::group(['prefix' => 'admin', 'middleware' => 'admin.middleware'], function () {
    Route::get('/dashboard', [DashboardController::class, 'index'])->name('admin.dashboard');
    Route::get('/transaction', [DashboardController::class, 'trx'])->name('admin.transaction');

    // add cars
    Route::view('/add', 'admin.pages.tambah')->name('admin.add.data');
    Route::post('/add', [DashboardController::class, 'create'])->name('admin.add.data.process');

    // delete cars
    Route::get('/delete/{id}', [DashboardController::class, 'destroy'])->name('admin.delete.data');

    // edit cars
    Route::get('/edit/{id}', [DashboardController::class, 'edit'])->name('admin.edit.data');
    Route::put('/edit/{id}', [DashboardController::class, 'update'])->name('admin.edit.data.process');

    // delete cars
    Route::get('/transaction/{id}', [DashboardController::class, 'updatedData'])->name('admin.transaction.update');

    // logout
    Route::get('/logout', [LoginController::class, 'logout'])->name('admin.logout');
});;
