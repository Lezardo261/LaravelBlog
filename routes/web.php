<?php

use App\Http\Controllers\UserController;
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
Route::middleware(['auth'])->group(function (){
    Route::get('/dashboard', [UserController::class, 'dashboard_controller'])->name('Dashboard');
    Route::get('/logout', [UserController::class, 'logout'])->name('logout');

});


Route::middleware(['guest:web'])->group(function (){
    Route::get('/register', [UserController::class, 'register'])->name('register');
    Route::post('/registers', [UserController::class, 'register_store'])->name('register.store');
    //Route::get('register', [UserController::class], 'apa')->name('register');
    
    Route::get('/login', [UserController::class, 'login'])->name('login');
    Route::post('/logins', [UserController::class, 'login_store'])->name('login.store');


});

