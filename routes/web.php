<?php

use App\Http\Controllers\InfoController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\LoginController;
use App\Mail\ContactanosMailable;

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

// Route::get('/', function () {
//     return view('welcome');
// });

Route::get('/admin', function () {
    return view('admin');
});

Route::view('/login', "login")->name('login');
Route::view('/registro', "register")->name('registro');
Route::view('/privada', "secret")->middleware('auth')->name('privada');
//protegida para el ususario no accedea sesion

Route::post('/validar-registro', [LoginController::class, 'register'])->name('validar-registro');
Route::post('/inicia-sesion', [LoginController::class, 'login'])->name('inicia-sesion');
Route::get('/logout', [LoginController::class, 'logout'])->name('logout');


//rutas ejemplos

Route::get('tareas/registrar', [InfoController::class, "create"])->name('tarea-create');

//rutas pra los cruds de INFO USER

//REGISTRAR
Route::get('secret', [InfoController::class, "create"])->name('info-create');
//RUTA PARA GUARDAR
Route::post('info/guardar', [InfoController::class, "store"])->name('info-store');
//RUTA PARA LISTAR
Route::get('info/listar', [InfoController::class, "index"])->name('info.index');
//ruta para editar
Route::get('info/{info}/editar', [InfoController::class, "edit"])->name('info.edit');


//para los emails

Route::get('/contactanos', [ContactanosMailable::class, "index"])->name('contactanos.index');
