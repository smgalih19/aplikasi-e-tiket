<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\LoginController;
use App\Http\Controllers\TicketController;
use App\Http\Controllers\RegisterController;
use App\Http\Controllers\UpdateProfileController;
use App\Http\Controllers\DashboardTiketController;
use App\Http\Controllers\UpdatePasswordController;
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

Route::get('/viewtiket', [TicketController::class, 'index']);

Route::get('/aboutus', function () {
    return view('aboutus');
});

//Login
Route::get('/login', [LoginController::class, 'index'])->name('login')->middleware('guest');
Route::post('/login', [LoginController::class, 'authenticate']);
Route::post('/logout', [LoginController::class, 'logout']);

//Register
Route::get('/register', [RegisterController::class, 'index'])->middleware('guest');
Route::post('/register', [RegisterController::class, 'store']);

// Dashboard Admin
Route::get('/dashboard', function(){
    return view('dashboard.index');
})->middleware('auth');

Route::resource('/dashboard/data-ticket', DashboardTiketController::class)->middleware('auth');
Route::get('/dashboard/history-ticket', [DashboardTiketController::class, 'history']);
Route::get('/dashboard/update-profile/password/edit', [UpdatePasswordController::class, 'edit']);
Route::put('/dashboard/update-profile/password/edit', [UpdatePasswordController::class, 'update']);

// UpdateProfileAdmin
Route::middleware(['auth'])->group(function () {
    Route::get('/dashboard/update-profile',[UpdateProfileController::class,'index'])->name('profile');
    Route::post('/dashboard/update-profile/{user}',[UpdateProfileController::class,'update'])->name('profile.update');
});

// Dashboard User
Route::get('/dashboard-user', function(){
    return view('dashboard-user.index');
})->middleware('auth');

Route::resource('/dashboard-user/data-user', DashboardUserTiketController::class)->middleware('auth');
Route::get('/dashboard-user/data-order', [DashboardUserTiketController::class, 'order']);