<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\RegisterController;
use App\Http\Controllers\LoginController;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\LogoutController;
use App\Http\Controllers\CommentController;
use App\Http\Controllers\ProfileController;

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
    return redirect('/home');
});

Route::get('/home', [HomeController::class, 'index']);
Route::get('/register', [RegisterController::class, 'show']);
Route::post('/register', [RegisterController::class, 'register']);
Route::get('/login', [LoginController::class, 'show']);
Route::post('/login', [LoginController::class, 'login']);
Route::get('/logout', [LogoutController::class, 'logout']);
Route::post('/home', [CommentController::class, 'comment']);
Route::get('/home/logoreg', function () {
    return view ('advises.adv1');
});
Route::get('/comment/{id}', [CommentController::class, 'show'])->name('comment-edit');
Route::delete('/comment/{id}', [CommentController::class, 'destroy'])->name('comment-destroy');
Route::patch('/comment/{id}', [CommentController::class, 'update'])->name('comment-update');
Route::get('/profile/{id}', [ProfileController::class, 'index'])->name('profile-view');