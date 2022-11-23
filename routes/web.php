<?php

use App\Http\Controllers\AdminController;
use App\Http\Controllers\DocController;
use App\Http\Controllers\InfoController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\LoginController;
use App\Http\Controllers\PdfController;
use App\Http\Controllers\PosController;
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

// INFORMACIÓN PERSONAL
Route::get('/privada', [PosController::class, 'listar'])->middleware('auth')->name('privada');
Route::get('/BuscarP', [PosController::class, 'buscarprovincia'])->name('buscarprovincia');
Route::get('/BuscarD', [PosController::class, 'buscardistrito'])->name('buscardistrito');


// Route::view('/admin', "admin.index")->middleware('auth')->name('admin.index');

//protegida para el ususario no accedea sesion

Route::post('/validar-registro', [LoginController::class, 'register'])->name('validar-registro');
Route::post('/inicia-sesion', [LoginController::class, 'login'])->name('inicia-sesion');
Route::get('/logout', [LoginController::class, 'logout'])->name('logout');


//rutas pra los cruds de INFO USER

//REGISTRAR
Route::get('secret', [InfoController::class, "create"])->name('info-create');
Route::get('info/{info}/ver', [InfoController::class, "show"])->name('info.show');
Route::post('info/guardar', [InfoController::class, "store"])->name('info-store');

//ENTREVISTA PERSONAL
Route::view('entrevista', "entrevista.index")->name('entrevista.index');

//FINALIZADO
Route::view('finalizado', "finalizado")->name('finalizado');


//ADMINISTRADOR-------------------------------------
Route::get('info/listar', [InfoController::class, "index"])->name('info.index');
Route::get('info/{info}/editar', [InfoController::class, "edit"])->name('info.edit');
Route::put('info/{info}/actualizar', [InfoController::class, "update"])->name('info.update');
Route::delete('info/{info}/eliminar', [InfoController::class, "destroy"])->name('info.delete');


Route::get('/listado-usuarios', [AdminController::class, "listado"])->name('admin.index');
// Route::view('/listar', "admin.index")->name('listar');
// Route::view('/postulantes', "admin.postulantes")->name('postulantes');
Route::get('/postulantes', [AdminController::class, "listarpostulantes"])->name('postulantes');
Route::put('cambiar-estado/{info}', [AdminController::class, 'CambiarEstado'])->name('admin.actualizar');


// Route::view('/misdocumentos', "admin.mis-documentos")->name('mis-documentos');
Route::get('misdocumentos/{id}', [AdminController::class, "DetalleDocumento"])->name('misdocumentos');

// Route::view('/editar-pos', "admin.editar-pos")->name('editarpos');
Route::get('editar-pos/{id}', [AdminController::class, "EditarPostulante"])->name('editar-postulante');



//para los emails

Route::get('/contactanos', [ContactanosMailable::class, "index"])->name('contactanos.index');

// REGISTROS DE MIS DOCUEMNTOS
// Route::view('Documentos', "documentos.index")->name('documentos.index');
Route::view('misdocuemtos', "documentos.docs")->name('documentos.docs');

// DOMUMENTO 1

Route::get('doc1/{id_user}/{tipo_doc}', [DocController::class, "listardoc1"])->name('doc1');
Route::view('/documento1', "documentos.doc1")->name('documentos.doc1');
Route::post('pdf/getGenerar1', [PDFController::class, 'getGenerar1'])->name('pdf.getGenerar1');
Route::view('/pdf_doc1', "documentos.pdf_doc1")->name('documentos.pdf_doc1');
// --------------------------------------------------------
// DOCUMENTO 2
Route::get('doc2/{id_user}/{tipo_doc}', [DocController::class, "listardoc2"])->name('doc2');
Route::view('/documento2', "documentos.doc2")->name('documentos.doc2');
Route::post('pdf/getGenerar2', [PDFController::class, 'getGenerar2'])->name('pdf.getGenerar2');
Route::view('/pdf_doc2', "documentos.pdf_doc2")->name('documentos.pdf_doc2');
// --------------------------------------------------------
// DOCUMENTO 3
Route::get('doc3/{id_user}/{tipo_doc}', [DocController::class, "listardoc3"])->name('doc3');
Route::view('/documento3', "documentos.doc3")->name('documentos.doc3');
Route::post('pdf/getGenerar3', [PDFController::class, 'getGenerar3'])->name('pdf.getGenerar3');
Route::view('/pdf_doc3', "documentos.pdf_doc3")->name('documentos.pdf_doc3');
// --------------------------------------------------------
// DOCUMENTO 3
Route::get('doc4/{id_user}/{tipo_doc}', [DocController::class, "listardoc4"])->name('doc4');
Route::view('/documento4', "documentos.doc4")->name('documentos.doc4');
Route::post('pdf/getGenerar4', [PDFController::class, 'getGenerar4'])->name('pdf.getGenerar4');
Route::view('/pdf_doc4', "documentos.pdf_doc4")->name('documentos.pdf_doc4');

// ------------------------------------------------------

// Route::view('doc3', "documentos.doc3")->name('doc3');
// Route::view('doc4', "documentos.doc4")->name('doc4');
Route::view('doc5', "documentos.doc5")->name('doc5');
Route::view('doc6', "documentos.doc6")->name('doc6');

Route::get('pdf/preview', [PDFController::class, 'preview'])->name('pdf.preview');
Route::get('pdf/generate', [PDFController::class, 'generatePDF'])->name('pdf.generate');

//LLENADO DE DOCUMENTOS

// Route::view('documento/{id_user}', "documentos.index")->name('documentos.index');
Route::get('ListaDocs/{id_user}', [DocController::class, 'listardocs'])->name('documentos.index');

Route::get('pdf/getIndex', [PDFController::class, 'getIndex'])->name('pdf.getIndex');


