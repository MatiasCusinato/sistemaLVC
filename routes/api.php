<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\API\RubroController;
use App\Http\Controllers\API\ArticuloController;
use App\Http\Controllers\API\ComprobanteCabeceraController;
use App\Http\Controllers\API\ComprobanteRenglonController;
use App\Models\ComprobanteCabecera;

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

Route::middleware('auth:api')->get('/user', function (Request $request) {
    return $request->user();
});

Route::apiResource('rubros', RubroController::class);
Route::apiResource('articulos', ArticuloController::class);
Route::apiResource('comprobante_cabeceras', ComprobanteCabeceraController::class);
Route::apiResource('comprobante_renglons', ComprobanteRenglonController::class);
Route::post('operacion',[ComprobanteCabeceraController::class,'operacion'])->name('operaciones');

