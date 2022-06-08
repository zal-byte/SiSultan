<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\AreaController;
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

Route::get('/area/{area}', [AreaController::class, 'page']);
Route::get('/area', [AreaController::class, 'show'])->name('area');
Route::get("/", [AreaController::class,'show']);