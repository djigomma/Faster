<?php

use App\Http\Controllers\ChauffeurController;
use App\Http\Controllers\ReservationController;
use App\Http\Controllers\UserController;
use App\Models\Reservation;
use Illuminate\Support\Facades\Auth;
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

Route::get('/', function () {
    return view('template/home');
});
Route::get('/c', function () {
    return view('chauffeur/index');
});

Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');

Route::post('/chauffeur/store', [App\Http\Controllers\ChauffeurController::class, 'store'])->name('ajoutC');
Route::get('/client/store', [App\Http\Controllers\UserController::class, 'store'])->name('ajoutCL');
Route::post('/reservation/store', [App\Http\Controllers\ReservationController::class, 'store'])->name('ajoutR');

Route::prefix('admin')->middleware(['auth', 'isAdmin'])->group(function (){
    Route::get('dashboard', [App\Http\Controllers\Admin\DashboardController::class, 'index']);
});

Route::get('/ch', [ChauffeurController::class, 'index']);

Route::get('/client', [UserController::class, 'index']);


Route::get('/reservation', [ReservationController::class, 'index']);
Route::get('/reservation/show', [ReservationController::class, 'show']);

Route::get('/chauffeur/create', [ChauffeurController::class, 'create']);

