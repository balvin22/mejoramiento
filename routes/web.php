<?php

use App\Http\Controllers\ClienteController;
use App\Http\Controllers\DestinoController;
use App\Http\Controllers\JugadorController;
use App\Http\Controllers\PresidenteController;
use App\Http\Controllers\ProyectoController;
use App\Http\Controllers\ViajeroController;
use Illuminate\Support\Facades\Route;

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

Route::get('/', function () {
    return view('welcome');
});
Route::get('taller', [JugadorController::class,"taller"])->name("taller");
// rutas de los jugadores
Route::get('jugador', [JugadorController::class,"inicio"]);
Route::post('jugador', [JugadorController::class,"store"])->name("jugador.store");
Route::get('jugador/index', [JugadorController::class, 'index'])->name('jugador.index');
Route::get('jugador/{id}', [JugadorController::class, 'show'])->name('jugador.show');
Route::put('jugador/{id}', [JugadorController::class, 'update'])->name('jugador.update');
Route::delete('jugador/{id}', [JugadorController::class, 'destroy'])->name('jugador.destroy');
Route::get('jugador/{id}/edit', [JugadorController::class, 'edit'])->name('jugador.edit');
//ruta presidente
Route::get('presidente',[PresidenteController::class, 'inicio']);
Route::post('presidente',[PresidenteController::class, 'store'])->name('presidentes.store');
Route::get('presidente/index',[PresidenteController::class,'index'])->name('presidentes.index');
Route::get('presidente/{id}',[PresidenteController::class,'show'])->name('presidentes.show');
Route::put('presidentes/{id}',[PresidenteController::class,'update'])->name('presidentes.update');
Route::delete('presidente/{id}',[PresidenteController::class,'destroy'])->name('presidentes.destroy');
Route::get('presidente/{id}/edit',[PresidenteController::class,'edit'])->name('presidentes.edit');
// rutas clientes
Route::get('cliente',[ClienteController::class, 'inicio']);
Route::post('cliente',[ClienteController::class, 'store'])->name('cliente.store');
Route::get('cliente/index',[ClienteController::class,'index'])->name('cliente.index');
Route::get('cliente/{id}',[ClienteController::class,'show'])->name('cliente.show');
Route::put('cliente/{id}',[ClienteController::class,'update'])->name('cliente.update');
Route::delete('cliente/{id}',[ClienteController::class,'destroy'])->name('cliente.destroy');
Route::get('cliente/{id}/edit',[ClienteController::class,'edit'])->name('cliente.edit');
// rutas de proyecto
Route::get('proyecto',[ProyectoController::class, 'inicio']);
Route::post('proyecto',[ProyectoController::class, 'store'])->name('proyecto.store');
Route::get('proyecto/index',[ProyectoController::class,'index'])->name('proyecto.index');
Route::get('proyecto/{id}',[ProyectoController::class,'show'])->name('proyecto.show');
Route::put('proyecto/{id}',[ProyectoController::class,'update'])->name('proyecto.update');
Route::delete('proyecto/{id}',[ProyectoController::class,'destroy'])->name('proyecto.destroy');
Route::get('proyecto/{id}/edit',[ProyectoController::class,'edit'])->name('proyecto.edit');
// ruta viajero
Route::get('viajero',[ViajeroController::class, 'inicio']);
Route::post('viajero',[ViajeroController::class, 'store'])->name('viajero.store');
Route::get('viajero/index',[ViajeroController::class,'index'])->name('viajero.index');
Route::get('viajero/{id}',[ViajeroController::class,'show'])->name('viajero.show');
Route::put('viajero/{id}',[ViajeroController::class,'update'])->name('viajero.update');
Route::delete('viajero/{id}',[ViajeroController::class,'destroy'])->name('viajero.destroy');
Route::get('viajero/{id}/edit',[ViajeroController::class,'edit'])->name('viajero.edit');
// ruta destino
Route::get('destino',[DestinoController::class, 'inicio']);
Route::post('destino',[DestinoController::class, 'store'])->name('destino.store');
Route::get('destino/index',[DestinoController::class,'index'])->name('destino.index');
Route::get('destino/{id}',[DestinoController::class,'show'])->name('destino.show');
Route::put('destino/{id}',[DestinoController::class,'update'])->name('destino.update');
Route::delete('destino/{id}',[DestinoController::class,'destroy'])->name('destino.destroy');
Route::get('destino/{id}/edit',[DestinoController::class,'edit'])->name('destino.edit');


