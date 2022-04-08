<?php

use App\Http\Controllers\TransactionController;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| API Routes
|--------------------------------------------------------------------------
|
| Here is where you can register API routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| is assigned the "api" middleware group. Enjoy building your API!
|
*/
Route::get('/transaksi',[TransactionController::class, 'index']);
Route::post('/transaksi',[TransactionController::class, 'store']);
Route::put('/transaksi/{id}',[TransactionController::class, 'update']);
Route::get('/transaksi/{id}',[TransactionController::class, 'show']);
Route::delete('/transaksi/{id}',[TransactionController::class, 'destroy']);

