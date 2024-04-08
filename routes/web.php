<?php

use App\Http\Controllers\User\CheckController;
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

Route::get('/', function () {
    return view('welcome');
})->name('welcome');

Route::get('user/check', [CheckController::class, 'index'])->name('user.check.index');
Route::post('user/check', [CheckController::class, 'check'])->name('user.check');
