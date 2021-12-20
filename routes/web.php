<?php

use App\Http\Controllers\CartController;
use App\Http\Controllers\GameController;
use App\Http\Controllers\GenreController;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\RegisterController;
use App\Http\Controllers\LoginController;
use App\Http\Controllers\ProfileController;
use App\Http\Controllers\TransactionController;
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

Route::get('/login', [LoginController::class, 'index'])->name('account.login')->middleware('guest');
Route::post('/login', [LoginController::class, 'authenticate'])->name('account.login');
Route::get('/logout', [LoginController::class, 'logout'])->name('account.logout');

Route::get('/register', [RegisterController::class, 'index'])->name('account.register')->middleware('guest');
Route::post('/register', [RegisterController::class, 'createUser'])->name('account.register');

Route::prefix('')->group(function () {
    Route::get('/', [HomeController::class, 'index'])->name('home.index');
    Route::get('/search', [HomeController::class, 'search'])->name('home.search');
});

Route::prefix('game')->group(function () {
    Route::get('/{id}', [GameController::class, 'getGameDetail'])->name('game.detail');
});

Route::prefix('manage-game')->middleware('admin')->group(function () {
    Route::get('/', [GameController::class, 'getListGameDetail'])->name('manageGame.manage');
    Route::get('/add', [GameController::class, 'getAddGameView'])->name('manageGame.add');
    Route::post('/add', [GameController::class, 'addGame'])->name('manageGame.add');
    Route::put('/update', [GameController::class, 'updateGame'])->name('manageGame.update');
    Route::get('/{id}', [GameController::class, 'getGameDetailUpdate'])->name('manageGame.detail');
    Route::delete('/delete/{id}', [GameController::class, 'deleteGame'])->name('manageGame.delete');
});

Route::prefix('manage-genre')->middleware('admin')->group(function () {
    Route::get('/', [GenreController::class, 'getListGenreDetail'])->name('manageGenre.manage');
    Route::get('/{id}', [GenreController::class, 'getGenreDetailUpdate'])->name('manageGenre.detail');
    Route::put('/update', [GenreController::class, 'updateGenre'])->name('manageGenre.update');
});

Route::prefix('cart')->middleware('auth')->group(function () {
    Route::get('/', [CartController::class, 'getCart'])->name('cart.list');
    Route::post('/add', [CartController::class, 'addToCart'])->name('cart.add');
    Route::put('/update', [CartController::class, 'updateCart'])->name('cart.update');
    Route::delete('/remove/{id}', [CartController::class, 'removeCart'])->name('cart.remove');
});

Route::prefix('transaction')->middleware('auth')->group(function () {
    Route::get('/', [TransactionController::class, 'getTransactionHistory'])->name('transaction.history');
    Route::get('/detail/{id}', [TransactionController::class, 'getTransactionHistoryDetail'])->name('transaction.historyDetail');
    Route::post('/checkout', [TransactionController::class, 'checkout'])->name('transaction.checkout');
});

Route::prefix('profile')->middleware('auth')->group(function () {
    Route::get('/', [ProfileController::class, 'getProfile'])->name('profile.get');
    Route::put('/update-profile', [ProfileController::class, 'updateProfile'])->name('profile.updateProfile');
    Route::put('/update-password', [ProfileController::class, 'updatePassword'])->name('profile.updatePassword');
});
