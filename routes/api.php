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


Route::controller(SurfistaController::class)->group(function () {
    Route::get('surfistas/index', 'index');
    Route::post('surfistas/store', 'store');  
    Route::get('surfistas/show/{numero}','show');
    Route::put('surfistas/update/{id}','update'); 
    Route::delete('surfistas/destroy/{id}','destroy');
});


Route::controller(BateriaController::class)->group(function () {
    Route::get('bateria/index', 'index');
    Route::post('bateria/store', 'store');  
    Route::get('bateria/show/{id}','show');
    Route::put('bateria/update/{id}','update'); 
    Route::delete('bateria/destroy/{id}','destroy');
    Route::get('bateria/vencedor/{id}','determinarVencedor');
    
});

Route::controller(OndasController::class)->group(function () {
    Route::get('ondas/index', 'index');
    Route::post('ondas/store', 'store');  
    Route::get('ondas/show/{id}','show');
    Route::put('ondas/update/{id}','update'); 
    Route::delete('ondas/destroy/{id}','destroy');
});



Route::controller(NotasController::class)->group(function () {
    Route::get('notas/index', 'index');
    Route::post('notas/store', 'store');  
    Route::get('notas/show/{id}','show');
    Route::put('notas/update/{id}','update');   
    Route::delete('notas/destroy/{id}','destroy');
    Route::get('notas/media/{id}','obterMedia');
});
