<?php

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

Route::get('/', function () {
    return view('welcome');
});

Auth::routes();


Route::middleware(['auth'])->group(function () {

    Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');

    // USUARIOS

    Route::get('general.users', [App\Http\Controllers\UserController::class, 'index'])->name('general.users.index')
    ->middleware('permission:general.users.index');

    Route::get('general.users/{user}',[App\Http\Controllers\UserController::class, 'show'])->name('general.users.show')
    ->middleware('permission:general.users.show');

    Route::get('general.users.create', [App\Http\Controllers\UserController::class, 'create'])->name('general.users.create')
    ->middleware('permission:general.users.create');

    Route::post('general.users.store',[App\Http\Controllers\UserController::class, 'store'])->name('general.users.store')
    ->middleware('permission:general.users.create');

    Route::get('general.users/{user}/edit',[App\Http\Controllers\UserController::class, 'edit'])->name('general.users.edit')
    ->middleware('permission:general.users.edit');

    Route::put('general.users/{user}',[App\Http\Controllers\UserController::class, 'update'])->name('general.users.update')
    ->middleware('permission:general.users.edit');

    Route::delete('general.users/{user}',[App\Http\Controllers\UserController::class, 'destroy'])->name('general.users.destroy')
    ->middleware('permission:general.users.destroy');

});