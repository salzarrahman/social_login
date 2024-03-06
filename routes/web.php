<?php

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
    return view('welcome');
});

Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');

// //Google
// Route::get('/login/google', [App\Http\Controllers\LoginController::class, 'redirectToGoogle'])->name('login.google');
// Route::get('/login/google/callback', [App\Http\Controllers\LoginController::class, 'handleGoogleCallback']);

// //Facebook
// Route::get('/login/facebook', [App\Http\Controllers\LoginController::class, 'redirectToFacebook'])->name('login.facebook');
// Route::get('/login/facebook/callback', [App\Http\Controllers\LoginController::class, 'handleFacebookCallback']);


//Github
Route::get('/CallGithub', [App\Http\Controllers\LoginController::class, 'CallGithub']);
Route::get('/GithubCallback', [App\Http\Controllers\LoginController::class, 'GithubCallGithub']);
