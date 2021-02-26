<?php

use App\Http\Controllers\HomeController;
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

Route::get('/', [HomeController::class, 'index'])->name('home');
Route::get('export-email-address-table', [HomeController::class, 'exportEmailAddress'])->name('exportEmailAddressTable');
Route::get('export-accounts-table', [HomeController::class, 'exportAccount'])->name('exportAccountTable');
Route::get('export-leads-table', [HomeController::class, 'exportLead'])->name('exportLeadTable');

Auth::routes();
