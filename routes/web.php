<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\LoginController;
use App\Http\Controllers\RegisterController;
use App\Http\Controllers\DashboardTiketController;
use App\Http\Controllers\DashboardUserTiketController;

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
    return view('home');
});

Route::get('/viewtiket', function () {
    return view('viewtiket');
});

Route::get('/aboutus', function () {
    return view('aboutus');
});

Route::get('/login', [LoginController::class, 'index'])->name('login')->middleware('guest');
Route::post('/login', [LoginController::class, 'authenticate']);
Route::post('/logout', [LoginController::class, 'logout']);

Route::get('/register', [RegisterController::class, 'index'])->middleware('guest');
Route::post('/register', [RegisterController::class, 'store']);

Route::get('/dashboard', function(){
    return view('dashboard.index');
})->middleware('auth');

Route::resource('/dashboard/history', DashboardTiketController::class)->middleware('auth');
Route::get('/dashboard/data-ticket', [DashboardTiketController::class, 'ticket'])->middleware('auth');

Route::get('/dashboard-user', function(){
    return view('dashboard-user.index');
})->middleware('auth');

Route::resource('/dashboard-user/index' , DashboardUserTiketController::class);