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

Auth::routes();
Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
Route::post('/get-wizard-data', [App\Http\Controllers\HomeController::class, 'wizard'])->name('wizard');
//
Route::get('/dashboard', [App\Http\Controllers\HomeController::class, 'dashboard'])->name('dashboard');
Route::get('/dashboard/coming-soon', [App\Http\Controllers\HomeController::class, 'coming_soon'])->name('coming-soon');
Route::get('/dashboard/income-statement', [App\Http\Controllers\HomeController::class, 'income_statement'])->name('income-statement');




Auth::routes();
Route::get('/', [App\Http\Controllers\HomeController::class, 'index'])->name('admin.home')->middleware('is_admin');


