<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
use App\Models\Arbol;
use App\Http\Controllers\ArbolesController;

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

Route::get('/arboles', [ArbolesController::class, 'index']);
Route::post('/crear', [ArbolesController::class, 'store']);
