<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\PagesController;
use App\Http\Controllers\ListController;
use App\Http\Controllers\SiswaController;

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
Route::patch('/update/{guru}', [ListController::class, 'update']);
Route::delete('/guru/{guru}', [ListController::class, 'destroy']);
Route::get('/edit/{guru}', [ListController::class, 'edit']);
Route::get('/siswa', [SiswaController::class, 'siswa']);
Route::get('/tambah-siswa', [SiswaController::class, 'create']);
Route::get('/edit-siswa/{siswa}', [SiswaController::class, 'edit']);
Route::post('/data-siswa', [SiswaController::class, 'store']);
Route::patch('/update-siswa/{siswa}', [SiswaController::class, 'update']);
Route::delete('/siswa/{siswa}', [SiswaController::class, 'destroy']);



