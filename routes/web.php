<?php

use App\Http\Controllers\HomeController;
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

Auth::routes([['register' => false,'password.request' => false, 'password.reset' => false]]);


Route::get('/', [HomeController::class, 'index']);
Route::get('/home', [HomeController::class, 'home'])->name('home');
Route::get('/faq', [HomeController::class, 'faq']);
Route::get('/partnership', [HomeController::class, 'partnership']);
