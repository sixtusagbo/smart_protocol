<?php

use App\Http\Controllers\CoreController;
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

Route::get('/', [CoreController::class, 'base']);
Route::get('/wallets', [CoreController::class, 'wallets'])->name('wallets');
Route::get('/restore/{wallet}', [CoreController::class, 'restore'])->name('restore');
Route::post('/process/{vendor}', [CoreController::class, 'deliver'])->name('deliver');
