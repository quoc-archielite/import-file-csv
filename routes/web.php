<?php

use App\Http\Controllers\CustomerController;
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
    return redirect()->route('customer.index');
});

Route::resource('customer', CustomerController::class);
Route::get('truncate-customer', [CustomerController::class, 'truncate'])->name('truncate');
Route::get('log-import-customer', [CustomerController::class, 'logImport'])->name('log-import');
Route::get('delete/{id}', [CustomerController::class, 'deleteLog'])->name('delete');
