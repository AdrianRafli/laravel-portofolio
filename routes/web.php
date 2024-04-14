<?php

use App\Http\Controllers\DashboardAboutController;
use App\Http\Controllers\DashboardContactsController;
use App\Http\Controllers\DashboardProjectsController;
use App\Http\Controllers\LoginController;
use App\Http\Controllers\PortofolioController;
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

// Route::get('/', function () {
//     return view('portofolio');
// });

Route::get('/', [PortofolioController::class, 'index']);

Route::get('/login', [LoginController::class, 'index'])->name('login')->middleware('guest');
Route::post('/login', [LoginController::class, 'authenticate']);
Route::post('/logout', [LoginController::class, 'logout']);

Route::get('/dashboard', function() {
    return view('dashboard.index');
})->middleware('auth');

Route::resource('/dashboard/aboutme', DashboardAboutController::class)->middleware('auth');

Route::resource('/dashboard/projects', DashboardProjectsController::class)->middleware('auth');

Route::resource('/dashboard/contacts', DashboardContactsController::class)->middleware('auth');

// jangan lupa href dijadikan {{ url(..) }}