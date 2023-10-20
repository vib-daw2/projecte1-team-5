<?php

use Illuminate\Support\Facades\Route;

use App\Http\Controllers\SellController;
use Illuminate\Support\Facades\Auth;

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
});

Route::get('/sells', [App\Http\Controllers\SellController::class, 'index'])->name('sells.index');

Route::get('/sells/show/{id}', [App\Http\Controllers\SellController::class, 'show'])->name('sells.show');

Route::get('/sells/create', [App\Http\Controllers\SellController::class, 'create'])->name('sells.create');

Route::post('/sells/store', [App\Http\Controllers\SellController::class, 'store'])->name('sells.store');

Route::get('/sells/destroy/{id}', [App\Http\Controllers\SellController::class, 'destroy'])->name('sells.destroy');

Route::get('/sells/edit/{id}', [SellController::class, 'edit'])->name('sells.edit');

Route::put('/sells/update/{id}', [App\Http\Controllers\SellController::class, 'update'])->name('sells.update');

Route::get('/nosotros', [App\Http\Controllers\NosotrosController::class, 'index'])->name('nosotros.index');

Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');

Route::get('/packages', [App\Http\Controllers\PackageController::class, 'index'])->name('packages.index');

Route::get('/packages/show/{id}', [App\Http\Controllers\PackageController::class, 'show'])->name('packages.show');

Route::get('/packages/create', [App\Http\Controllers\PackageController::class, 'create'])->name('packages.create');

Route::post('/packages/store', [App\Http\Controllers\PackageController::class, 'store'])->name('packages.store');

Route::get('/packages/destroy/{id}', [App\Http\Controllers\PackageController::class, 'destroy'])->name('packages.destroy');

Route::get('/packages/edit/{id}', [App\Http\Controllers\PackageController::class, 'edit'])->name('packages.edit');

Route::post('/packages/update/{id}', [App\Http\Controllers\PackageController::class, 'update'])->name('packages.update');

Route::post('/realizar-operacion', 'PackageController@realizarOperacion')->name('realizar-operacion');

