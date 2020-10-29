<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\FrontController;
use App\Http\Controllers\BackendController;
use App\Http\Controllers\TicketBackendController;

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

Route::get('/', [FrontController::class, 'index'])->name('index');
Route::get('showall', [FrontController::class, 'showall'])->name('showall');
Route::get('backend',[BackendController::class, 'index'])->name('backend.index');
Route::get('show/{id}', [FrontController::class, 'show'])->name('show');
Route::get('backend/ticket/{id}/delete',[TicketBackendController::class, 'delete']);





Route::resource('backend/ticket', TicketBackendController::class, ['names' => 'backend.ticket']);