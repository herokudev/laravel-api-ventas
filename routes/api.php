<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\VentaController;
use App\Http\Controllers\ClientController;
use App\Http\Controllers\WorkerController;
use App\Http\Controllers\ArticuloController;

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

Route::get('/articulos', [ArticuloController::class, 'show']);
Route::get('/articulos/{id}', [ArticuloController::class, 'getById']);
Route::post('/articulos/new', [ArticuloController::class, 'create']);
Route::put('/articulos/edit/{id}', [ArticuloController::class, 'update']);
Route::put('/articulos/delete/{id}', [ArticuloController::class, 'delete']);

Route::get('/clients', [ClientController::class, 'show']);
Route::get('/clients/{id}', [ClientController::class, 'getById']);
Route::post('/clients/new', [ClientController::class, 'create']);
Route::put('/clients/edit/{id}', [ClientController::class, 'update']);
Route::put('/clients/delete/{id}', [ClientController::class, 'delete']);

Route::get('/workers', [WorkerController::class, 'show']);
Route::get('/workers/{id}', [WorkerController::class, 'getById']);
Route::post('/workers/new', [WorkerController::class, 'create']);
Route::put('/workers/edit/{id}', [WorkerController::class, 'update']);
Route::put('/workers/delete/{id}', [WorkerController::class, 'delete']);

Route::get('/ventas', [VentaController::class, 'show']);
Route::get('/ventas/{id}', [VentaController::class, 'getById']);
Route::post('/ventas/new', [VentaController::class, 'create']);
Route::put('/ventas/edit/{id}', [VentaController::class, 'update']);
Route::put('/ventas/delete/{id}', [VentaController::class, 'delete']);

Route::get('/detalleventas', [VentaController::class, 'show']);
Route::get('/detalleventas/{id}', [VentaController::class, 'getById']);
Route::post('/detalleventas/new', [VentaController::class, 'create']);
Route::put('/detalleventas/edit/{id}', [VentaController::class, 'update']);

Route::get('/suppliers', [ClientController::class, 'show']);
Route::get('/suppliers/{id}', [ClientController::class, 'getById']);
Route::post('/suppliers/new', [ClientController::class, 'create']);
Route::put('/suppliers/edit/{id}', [ClientController::class, 'update']);
Route::put('/suppliers/delete/{id}', [ClientController::class, 'delete']);

Route::get('/compras', [VentaController::class, 'show']);
Route::get('/compras/{id}', [VentaController::class, 'getById']);
Route::post('/compras/new', [VentaController::class, 'create']);
Route::put('/compras/edit/{id}', [VentaController::class, 'update']);
Route::put('/compras/delete/{id}', [VentaController::class, 'delete']);

Route::get('/detallecompras', [VentaController::class, 'show']);
Route::get('/detallecompras/{id}', [VentaController::class, 'getById']);
Route::post('/detallecompras/new', [VentaController::class, 'create']);
Route::put('/detallecompras/edit/{id}', [VentaController::class, 'update']);
