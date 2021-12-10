<?php

use App\Http\Controllers\HomeController;
use App\Http\Controllers\RegisterController;
use App\Http\Controllers\LoginController;
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

Route::get('/login', [LoginController::class, 'index'])->name('login')->middleware('guest');
Route::post('/login', [LoginController::class, 'authenticate']);
Route::get('/logout', [LoginController::class, 'logout']);


Route::get('/register', [RegisterController::class, 'index'])->middleware('guest');
Route::post('/register', [RegisterController::class, 'createUser']);


Route::get('/', [HomeController::class, 'index']);



Route::get('/manage-game', function () {
    return view('AdminMenu/manageGame');
});

Route::get('/game-detail', function () {
    return view('gameDetail');
});

Route::get('/update-game', function () {
    return view('AdminMenu/updateGame');
});

Route::get('/add-game', function () {
    return view('AdminMenu/addGame');
});

Route::get('/manage-game-genre', function () {
    return view('AdminMenu/manageGameGenre');
});

Route::get('/update-game-genre', function () {
    return view('AdminMenu/updateGameGenre');
});

Route::get('/profile', function () {
    return view('profile');
});

Route::get('/cart', function () {
    return view('cart');
});

Route::get('/transaction-history', function () {
    return view('transactionHistory');
});

Route::get('/transaction-history-detail', function () {
    return view('transactionHistDetail');
});
