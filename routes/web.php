<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\DepartamentoController;
use App\Http\Controllers\TablasController;
use App\Http\Controllers\CapitalController;
use App\Http\Controllers\ClimaController;
use App\Http\Controllers\ComidaController;
use App\Http\Controllers\EconomiaController;
use App\Http\Controllers\BaileController;
use App\Http\Controllers\HidrografiaController;
use App\Http\Controllers\RelieveController;
use App\Http\Controllers\PreguntasController;

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

Route::get('/', function () {
    return view('welcome');
});



Route::get("/departamento/listar", [DepartamentoController::class,'indexdepartamento']);
Route::get("/departamento/getInfo", [DepartamentoController::class,'infodepartamento']);
Route::get("/departamento/crear", [DepartamentoController::class,'creardepartamento']);
Route::get("/departamento/editar", [DepartamentoController::class,'editardepartamento']);
Route::get("/departamento/eliminar", [DepartamentoController::class,'eliminardepartamento']);


Route::get("/tablas/listar", [TablasController::class,'indextablas']);
Route::get("/tablas/getInfo", [TablasController::class,'infotablas']);
Route::get("/tablas/crear", [TablasController::class,'creartablas']);
Route::get("/tablas/editar", [TablasController::class,'editartablas']);
Route::get("/tablas/eliminar", [TablasController::class,'eliminartablas']);


Route::get("/capital/listar", [CapitalController::class,'indexcapital']);
Route::get("/capital/getInfo", [CapitalController::class,'infocapital']);
Route::get("/capital/crear", [CapitalController::class,'crearcapital']);
Route::get("/capital/editar", [CapitalController::class,'editarcapital']);
Route::get("/capital/eliminar", [CapitalController::class,'eliminarcapital']);


Route::get("/clima/listar", [ClimaController::class,'indexclima']);
Route::get("/clima/getInfo", [ClimaController::class,'infoclima']);
Route::get("/clima/crear", [ClimaController::class,'crearclima']);
Route::get("/clima/editar", [ClimaController::class,'editarclima']);
Route::get("/clima/eliminar", [ClimaController::class,'eliminarclima']);


Route::get("/comida/listar", [ComidaController::class,'indexcomida']);
Route::get("/comida/getInfo", [ComidaController::class,'infocomida']);
Route::get("/comida/crear", [ComidaController::class,'crearcomida']);
Route::get("/comida/editar", [ComidaController::class,'editarcomida']);
Route::get("/comida/eliminar", [ComidaController::class,'eliminarcomida']);


Route::get("/economia/listar", [EconomiaController::class,'indexeconomia']);
Route::get("/economia/getInfo", [EconomiaController::class,'infoeconomia']);
Route::get("/economia/crear", [EconomiaController::class,'creareconomia']);
Route::get("/economia/editar", [EconomiaController::class,'editareconomia']);
Route::get("/economia/eliminar", [EconomiaController::class,'eliminareconomia']);


Route::get("/baile/listar", [BaileController::class,'indexbaile']);
Route::get("/baile/getInfo", [BaileController::class,'infobaile']);
Route::get("/baile/crear", [BaileController::class,'crearbaile']);
Route::get("/baile/editar", [BaileController::class,'editarbaile']);
Route::get("/baile/eliminar", [BaileController::class,'eliminarbaile']);


Route::get("/hidrografia/listar", [HidrografiaController::class,'indexhidrografia']);
Route::get("/hidrografia/getInfo", [HidrografiaController::class,'infohidrografia']);
Route::get("/hidrografia/crear", [HidrografiaController::class,'crearhidrografia']);
Route::get("/hidrografia/editar", [HidrografiaController::class,'editarhidrografia']);
Route::get("/hidrografia/eliminar", [HidrografiaController::class,'eliminarhidrografia']);


Route::get("/relieve/listar", [RelieveController::class,'indexrelieve']);
Route::get("/relieve/getInfo", [RelieveController::class,'inforelieve']);
Route::get("/relieve/crear", [RelieveController::class,'crearrelieve']);
Route::get("/relieve/editar", [RelieveController::class,'editarrelieve']);
Route::get("/relieve/eliminar", [RelieveController::class,'eliminarrelieve']);

 
Route::post('/obtener-tema', [PreguntasController::class,'obtenerTema']);
Route::post('/obtener-respuestas-incorrectas', [PreguntasController::class,'obtenerRespuestasIncorrectas']);

