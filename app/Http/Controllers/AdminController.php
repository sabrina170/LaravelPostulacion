<?php

namespace App\Http\Controllers;

use App\Models\Documento;
use Illuminate\Http\Request;
use App\Models\User;
use App\Models\Info;
use Illuminate\Support\Facades\DB;
use League\CommonMark\Node\Block\Document;

class AdminController extends Controller
{
    public function listado()
    {
        /* Estados:
            1: Registrado
            2: Lleno sus datos
            3: Aceptado
            4: Completado
            5: Rechazado
        */

        $usuarios = User::orderByDesc('id')->get();
        $count = User::orderByDesc('id')->count();

        $postulantes_registrados = User::orderByDesc('id')
                                ->where('estado',1)
                                ->count();
        $postulantes_llenaron_registro = User::orderByDesc('id')
                                ->where('estado','<=',2)
                                ->count();
        $postulantes_aceptados = User::orderByDesc('id')
                                ->where('estado',3)
                                ->count();
        $postulantes_rechazados = User::orderByDesc('id')
                                ->where('estado',5)
                                ->count();


        // return redirect()->route('admin.index');
        //$count = 5;
        return view('admin.index',compact('count','usuarios', 'postulantes_registrados', 'postulantes_llenaron_registro','postulantes_aceptados','postulantes_rechazados'));
    }

    public function listarpostulantes()
    {
        $infos = Info::orderByDesc('id')->get();

        // return redirect()->route('admin.index');
        return view('admin.postulantes',compact('infos'));
    }

    public function DetalleDocumento($id)
    {
        $info_documentos = Documento::where('id_user', '=', $id)->get();
        // return redirect()->route('admin.index');
        return view('admin.misdocumentos',compact('info_documentos'));
        // dd($infos);
    }

    public function EditarPostulante($id)
    {
        $info_postulante = Info::where('id', '=', $id)->get();
        // return redirect()->route('admin.index');
        return view('admin.editar-pos',compact('info_postulante'));
        // dd($infos);
    }
}
