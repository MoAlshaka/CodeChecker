<?php

use App\Http\Controllers\Admin\Auth\AuthController;
use App\Http\Controllers\Admin\CodeController;
use App\Http\Controllers\Admin\DashboardController;
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

Route::prefix('admin')->group(function () {
    Route::get('/login', [AuthController::class, 'get_admin_login'])->name('get.admin.login');
    Route::post('login', [AuthController::class, 'login'])->name('admin.login');

    Route::middleware("auth:admin")->group(function () {
        //Dashboard
        Route::get('/', [DashboardController::class, 'index'])->name('admin.dashboard');
        // Code
        Route::get('code', [CodeController::class, 'index'])->name('admin.code.index');
        Route::get('code/create', [CodeController::class, 'create'])->name('admin.code.create');
        Route::post('code/store', [CodeController::class, 'store'])->name('admin.code.store');
        //logout
        Route::get('logout', [AuthController::class, 'logout'])->name('admin.logout');
    });
});
