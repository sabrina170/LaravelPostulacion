<?php

use App\Http\Controllers\InfoController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\LoginController;
use App\Http\Controllers\PdfController;
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

Route::get('/', function () {
    return view('login');
});

Route::view('/login', "login")->name('login');
Route::view('/registro', "register")->name('registro');
Route::view('/privada', "secret")->middleware('auth')->name('privada');
// Route::view('/admin', "admin.index")->middleware('auth')->name('admin.index');

//protegida para el ususario no accedea sesion

Route::post('/validar-registro', [LoginController::class, 'register'])->name('validar-registro');
Route::post('/inicia-sesion', [LoginController::class, 'login'])->name('inicia-sesion');
Route::get('/logout', [LoginController::class, 'logout'])->name('logout');


//rutas ejemplos

Route::get('tareas/registrar', [InfoController::class, "create"])->name('tarea-create');

//rutas pra los cruds de INFO USER

//REGISTRAR
Route::get('secret', [InfoController::class, "create"])->name('info-create');
Route::get('info/{info}/ver', [InfoController::class, "show"])->name('info.show');
Route::post('info/guardar', [InfoController::class, "store"])->name('info-store');

//ENTREVISTA PERSONAL
Route::view('entrevista', "entrevista.index")->name('entrevista.index');

//LLENADO DE DOCUMENTOS
Route::view('documento', "documentos.index")->name('documentos.index');

//FINALIZADO
Route::view('finalizado', "finalizado")->name('finalizado');


//ADMINISTRADOR-------------------------------------
Route::get('info/listar', [InfoController::class, "index"])->name('info.index');
Route::get('info/{info}/editar', [InfoController::class, "edit"])->name('info.edit');
Route::put('info/{info}/actualizar', [InfoController::class, "update"])->name('info.update');
Route::delete('info/{info}/eliminar', [InfoController::class, "destroy"])->name('info.delete');

Route::view('/dashboard', "admin.index")->name('dashboard');
Route::view('/postulantes', "admin.postulantes")->name('postulantes');
Route::view('/misdocumentos', "admin.mis-documentos")->name('mis-documentos');
Route::view('/editar-pos', "admin.editar-pos")->name('editarpos');



//para los emails

Route::get('/contactanos', [ContactanosMailable::class, "index"])->name('contactanos.index');

// REGISTROS DE MIS DOCUEMNTOS
Route::view('misdocuemtos', "documentos.docs")->name('documentos.docs');

Route::view('doc1', "documentos.doc1")->name('doc1');
Route::view('doc2', "documentos.doc2")->name('doc2');
Route::view('doc3', "documentos.doc3")->name('doc3');
Route::view('doc4', "documentos.doc4")->name('doc4');
Route::view('doc5', "documentos.doc5")->name('doc5');
Route::view('doc6', "documentos.doc6")->name('doc6');

Route::get('/misdocuemtos', [PdfController::class, "mform"])->name('documentos.docs');

Route::get('generate-pdf', [PDFController::class, 'generatePDF'])->name('myPDF');
// Route::get('vistapdf', [PdfController::class, 'generatePDF'])->name('myPDF');
