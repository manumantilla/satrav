<?php

use App\Http\Controllers\ProfileController;
use Illuminate\Support\Facades\Route;

use App\Http\Controllers\DronesController;
use App\Http\Controllers\VehiculoController;
use App\Http\Controllers\PagoController;
use App\Http\Controllers\ViajesController;
use App\Http\Controllers\DriversController;
use App\Http\Controllers\AbastecimientoController;
use App\Http\Controllers\ParadaController;
use App\Http\Controllers\UbicacionController;

use App\Http\Controllers\SensorController;

Route::get('/', function () {
    return view('welcome');
});

// * Route for see the ubication
Route::get('/vehiculo/{vehiculo_id}/ubicaciones', [UbicacionController::class, 'mostrarUbicaciones'])->name('vehiculo.ubicaciones');
// * Routes vehicle
Route::get('/planes',[PagoController::class,'mostrarPlanes'])->name('mostrar.planes');
Route::resource('drones',DronesController::class);

Route::resource('viajes', ViajesController::class);
Route::resource('vehiculos',VehiculoController::class);
Route::resource('pagos',PagoController::class);
Route::resource('drivers', DriversController::class);
Route::resource('abastecimientos', AbastecimientoController::class);
Route::resource('paradas', ParadaController::class);


Route::get('/sensores/{vehiculo}/index',[SensorController::class,'index'])->name('sensores.index');

Route::get('/dashboard', function () {
    return view('dashboard');
})->middleware(['auth', 'verified'])->name('dashboard');

Route::middleware('auth')->group(function () {
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
});

require __DIR__.'/auth.php';
