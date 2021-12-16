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


Route::get('/', [HomeController::class, 'index'])->name('home.index');

Route::prefix('game')->group(function () {
    Route::get('/{id}', [GameController::class, 'getGameDetail'])->name('game.detail');
});

Route::prefix('manage-game')->group(function () {
    Route::get('/', [GameController::class, 'getListGameDetail'])->name('manageGame.manage');
    Route::get('/add', [GameController::class, 'getAddGameView'])->name('manageGame.add');
    Route::post('/add', [GameController::class, 'addGame'])->name('manageGame.add');
    Route::put('/update', [GameController::class, 'updateGame'])->name('manageGame.update');
    Route::get('/{id}', [GameController::class, 'getGameDetailUpdate'])->name('manageGame.detail');
    Route::delete('/delete/{id}', [GameController::class, 'deleteGame'])->name('manageGame.delete');
});

Route::prefix('manage-genre')->group(function () {
    Route::get('/', [GenreController::class, 'getListGenreDetail'])->name('manageGenre.manage');
    Route::get('/{id}', [GenreController::class, 'getGenreDetailUpdate'])->name('manageGenre.detail');
    Route::put('/update', [GenreController::class, 'updateGenre'])->name('manageGenre.update');
});

Route::prefix('cart')->group(function () {
    Route::get('/', [CartController::class, 'getCart'])->name('cart.list')->middleware('auth');
    Route::post('/add', [CartController::class, 'addToCart'])->name('cart.add')->middleware('auth');
    Route::put('/update', [CartController::class, 'updateCart'])->name('cart.update')->middleware('auth');
    Route::delete('/remove/{id}', [CartController::class, 'removeCart'])->name('cart.remove')->middleware('auth');
});

Route::prefix('transaction')->group(function () {
    Route::get('/', [TransactionController::class, 'getTransactionHistory'])->name('transaction.history')->middleware('auth');
    Route::get('/detail/{id}', [TransactionController::class, 'getTransactionHistoryDetail'])->name('transaction.historyDetail')->middleware('auth');
    Route::post('/checkout', [TransactionController::class, 'checkout'])->name('transaction.checkout')->middleware('auth');
});

Route::prefix('profile')->group(function () {
    Route::get('/', [ProfileController::class, 'getProfile'])->name('profile.get');
    Route::put('/update-profile', [ProfileController::class, 'updateProfile'])->name('profile.updateProfile');
    Route::put('/update-password', [ProfileController::class, 'updatePassword'])->name('profile.updatePassword');
});


// Route::get('/update-game', function () {
//     return view('AdminMenu/updateGame');
// });

// Route::get('/add-game', function () {
//     return view('AdminMenu/addGame');
// });

// Route::get('/manage-game-genre', function () {
//     return view('AdminMenu/manageGameGenre');
// });

// Route::get('/update-game-genre', function () {
//     return view('AdminMenu/updateGameGenre');
// });

// Route::get('/profile', function () {
//     return view('profile');
// });

// Route::get('/transaction-history-detail', function () {
//     return view('transactionHistDetail');
// });
