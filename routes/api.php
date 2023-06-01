<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\AlbumController;
use App\Http\Controllers\FaixaController;

/*
|--------------------------------------------------------------------------
| API Routes
|--------------------------------------------------------------------------
|
| Here is where you can register API routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "api" middleware group. Make something great!
|
*/

Route::middleware('auth:sanctum')->get('/user', function (Request $request) {
    return $request->user();
});


Route::get('/album', [AlbumController::class, 'index']);
Route::get('/album/search/{query}', [AlbumController::class, 'search']);
Route::post('/album', [AlbumController::class, 'create']);
Route::put('/album', [AlbumController::class, 'update']);
Route::delete('/album/{id}', [AlbumController::class, 'delete']);


Route::get('/faixa', [FaixaController::class, 'index']);
Route::get('/faixa/search/{query}', [FaixaController::class, 'search']);
Route::post('/faixa', [FaixaController::class, 'create']);
Route::put('/faixa', [FaixaController::class, 'update']);
Route::delete('/faixa/{id}', [FaixaController::class, 'delete']);
