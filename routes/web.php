<?php

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

Route::get('/', function () {
    return view('index');
});

Route::get('/login', function () {
    return view('login');
});

Route::get('/register', function () {
    return view('register');
});

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
