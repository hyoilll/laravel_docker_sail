<?php

use App\Http\Controllers\LoginController;
use App\Http\Controllers\RegisterController;
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
    return view('welcome');
});

# access home
Route::get('/home', function () {
    return view('home');
})->name('home');

# register user
Route::get('/register', [RegisterController::class, 'create'])
    ->middleware('guest')
    ->name('register');
Route::post('/register', [RegisterController::class, 'store'])
    ->middleware('guest');

# auth user
Route::get('/login', [LoginController::class, 'index'])
    ->middleware('guest')
    ->name('login');
Route::post('/login', [LoginController::class, 'authenticate'])
    ->middleware('guest');
Route::get('/logout', [LoginController::class, 'logout'])
    ->middleware('auth')
    ->name('logout');