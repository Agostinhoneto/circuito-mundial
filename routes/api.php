<?php

use App\Http\Controllers\BateriaController;
use App\Http\Controllers\NotasController;
use App\Http\Controllers\OndasController;
use App\Http\Controllers\SurfistaController;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;

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

Route::apiResource('surfistas', SurfistaController::class)->only([
    'index', 'store',
]);

Route::apiResource('bateria', BateriaController::class)->only([
    'store', 
    'vencedor/{bateriaId}',
]);

/*
Route::controller(BateriaController::class)->group(function () {
    Route::post('bateria/store', 'store');  
    Route::get('bateria/vencedor/{bateriaId}','determinarVencedor');
});
*/
Route::controller(OndasController::class)->group(function () {
    Route::post('ondas/store', 'store');  
});

Route::controller(NotasController::class)->group(function () {
    Route::post('notas/store', 'store');  
});
