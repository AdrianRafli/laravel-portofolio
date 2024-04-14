<?php

use App\Http\Controllers\DashboardController;
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

Route::get('/login', [LoginController::class, 'index']);
Route::post('/login', [LoginController::class, 'authenticate']);

Route::get('/dashboard', [DashboardController::class, 'index']);