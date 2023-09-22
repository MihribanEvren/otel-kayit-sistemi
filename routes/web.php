<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\AdminController;
use App\Http\Controllers\CustomerController;

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

Route::get('/', [AdminController::class,'login'])->name('login');

Route::post('/login', [AdminController::class, 'authenticate'])->name('admin.authenticate');

Route::get('/index', [CustomerController::class, 'index'])->name('index');

Route::get('/create', [CustomerController::class, 'create'])->name('customer.create');

Route::post('/save', [CustomerController::class, 'save'])->name('customer.save');

Route::get('/customer-search', [CustomerController::class, 'search'])->name('customer.search');


