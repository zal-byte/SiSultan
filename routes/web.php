<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\AreaController;
use App\Http\Controllers\TestController;
use App\Http\Controllers\AuthController;
use App\Http\Controllers\AdminController;
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

Route::get('/dashboard', [AdminController::class, 'dashboard'])->name('dashboard');
Route::get('/logout', [AdminController::class,'logout'])->name('logout');

Route::get('/admin/login', [AuthController::class, 'login'])->name('login');
Route::post('/admin/login', [AuthController::class, 'login_post'])->name('login_post');

Route::get('/kota/{val}', [TestController::class, 'get_kota']);
Route::get('/usaha/{val}', [TestController::class, 'get_usaha']);
Route::get('/usr_city/{email}', [TestController::class, 'get_user_kota']);

Route::get('/area/{area}', [AreaController::class, 'page']);
Route::get('/area', [AreaController::class, 'show'])->name('area');
Route::get("/", [AreaController::class,'show']);