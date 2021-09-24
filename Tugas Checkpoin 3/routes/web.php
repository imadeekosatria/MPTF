<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\PagesController;
use App\Http\Controllers\ListController;
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

Route::get('/', [PagesController::class, 'home']);
Route::get('/about', [PagesController::class, 'about']);
Route::get('/guru', [ListController::class, 'guru']);
Route::get('/tambah', [ListController::class, 'create']);
Route::post('/data', [ListController::class, 'store']);
Route::delete('/guru/{guru}', [ListController::class, 'destroy']);
Route::get('/edit/{guru}', [ListController::class, 'edit']);