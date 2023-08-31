<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\EstudiantesController;
use App\Http\Controllers\DocentesController;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\PagosController;
use App\Http\Controllers\PagosMaestrosController;
use App\Http\Controllers\ImprimirController;
use App\Http\Controllers\TalleresController;

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

Route::get('/estudiantes',[EstudiantesController::class,'index']);
Route::get('/docentes',[DocentesController::class,'index']);
Route::post('/estudiantes',[EstudiantesController::class,'registro'])
    ->name('registro.estudiantes');
Route::post('/docentes',[DocentesController::class,'registro'])
    ->name('registro.docente');

Auth::routes(["register" => false,'reset'=>false]);

Route::get('/home', [HomeController::class, 'index'])->name('home');
Route::get('/alumnos',[PagosController::class, 'index'])->name('alumnos.index');
Route::resource('/pagos/alumnos',PagosController::class);

Route::get('/maestros',[PagosMaestrosController::class,'index'])->name('docentes.index');
Route::resource('/pagos/docentes',PagosMaestrosController::class);

Route::get('/listado',[ImprimirController::class,'index']);
Route::post('/imprimir/estudiantes',[ImprimirController::class,'listado'])
    ->name('imprimir_estudiantes');

Route::get('/talleres',[TalleresController::class,'index']);
Route::post('/imprimir/talleres',[TalleresController::class,'listado'])
    ->name('imprimir_talleres');



