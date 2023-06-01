<?php

use App\Models\Album;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\AlbumController;
use App\Http\Controllers\FaixaController;

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




Route::get('/albums', [AlbumController::class, 'show']);

Route::get('/faixas', [FaixaController::class, 'show']);

Route::get('/', [FaixaController::class, 'show']);

