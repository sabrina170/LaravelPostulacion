<?php

namespace App\Http\Controllers;

use App\Models\Documento;
use Illuminate\Http\Request;
use App\Models\User;
use App\Models\Info;
use Illuminate\Support\Facades\DB;
use League\CommonMark\Node\Block\Document;
use Database\Seeders\RoleSeeder;
use Spatie\Permission\Traits\HasRoles;
use Spatie\Permission\Models\Role;


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

        $usuarios = User::where('tipo',2)->get();


        $count = User::where('tipo',2)->count();

        $postulantes_registrados = User::orderByDesc('id')
            ->where('estado', 1)
            ->count();
        $postulantes_llenaron_registro = User::orderByDesc('id')
            ->where('estado', 3)
            ->count();
        $postulantes_aceptados = User::orderByDesc('id')
            ->where('estado', 4)
            ->count();
        $postulantes_rechazados = User::orderByDesc('id')
            ->where('estado', 7)
            ->count();
        $usuarios_no_completaron = User::orderByDesc('id')
            ->where('estado', 2)->get();

        // return redirect()->route('admin.index');
        //$count = 5;
        return view('admin.index', compact(
            'count',
            'usuarios',
            'postulantes_registrados',
            'postulantes_llenaron_registro',
            'postulantes_aceptados',
            'postulantes_rechazados',
            'usuarios_no_completaron'
        ));
    }

    public function listarpostulantes()
    {

        $infos = User::where('tipo',2)->get();
        // $infos = Info::join('users', 'users.id', '=', 'infos.user_id')->get();

        // return redirect()->route('admin.index');
        return view('admin.postulantes', compact('infos'));
    }

    public function DetalleDocumento($id)
    {
        $info_documentos = Documento::where('id_user', '=', $id)->get();
        // return redirect()->route('admin.index');
        return view('admin.misdocumentos', compact('info_documentos'));
        // dd($infos);
    }

    public function EditarPostulante($id)
    {
        $info_postulante = Info::join('users', 'users.id', '=', 'infos.user_id')
            ->where('user_id', '=', $id)->get();
        //dd($info_postulante);
        //$info_postulante = Info::where('user_id', '=', $id)->get();
        // return redirect()->route('admin.index');
        return view('admin.editar-pos', compact('info_postulante'));
        // dd($infos);
    }

    public function CambiarEstado(Request $request, $id)
    {
        $postulante = User::findOrFail($id);

        $postulante->estado = $request->input('estado');
        $postulante->update();
        return redirect()->route('postulantes');
        // return view('admin.postulantes');
    }

    public function cambiarvariosestadopos(Request $request)
    {

        $postulantes = json_decode($request->user, true);

        //borrar matriculaciones del usuario
        foreach ($postulantes as $pos) {
            // $consulta =  DB::table('users')->where('id', $pos)->update([
            //     'estado' => '7'
            // ]);
            $consulta =  DB::table('users')->where('id', $pos)->limit(1)->get();
            foreach ($consulta as $key) {
                if ($key->estado != 7) {
                    $consulta2 =  DB::table('users')->where('id', $pos)->update([
                        'estado' => '7'
                    ]);
                } else {
                };
            }
        }
        if ($consulta2) {
            echo 1;
        } else {
            echo 2;
        }
    }

    public function cambiarvariosestadopos2(Request $request)
    {

        $postulantes = json_decode($request->user, true);

        //borrar matriculaciones del usuario
        foreach ($postulantes as $pos) {
            // $consulta =  DB::table('users')->where('id', $pos)->update([
            //     'estado' => '7'
            // ]);
            $consulta =  DB::table('users')->where('id', $pos)->limit(1)->get();
            foreach ($consulta as $key) {
                if ($key->estado != 4) {
                    $consulta2 =  DB::table('users')->where('id', $pos)->update([
                        'estado' => '4'
                    ]);
                } else {
                };
            }
        }
        if ($consulta2) {
            echo 1;
        } else {
            echo "error en la consulta";
        }
    }

    public function cambiarvariosestadopos3(Request $request)
    {

        $postulantes = json_decode($request->user, true);

        //borrar matriculaciones del usuario
        foreach ($postulantes as $pos) {
            // $consulta =  DB::table('users')->where('id', $pos)->update([
            //     'estado' => '7'
            // ]);
            $consulta =  DB::table('users')->where('id', $pos)->limit(1)->get();
            foreach ($consulta as $key) {
                if ($key->estado != 3) {
                    $consulta2 =  DB::table('users')->where('id', $pos)->update([
                        'estado' => '3'
                    ]);
                } else {
                };
            }
        }
        if ($consulta2) {
            echo 1;
        } else {
            echo "error en la consulta";
        }
    }
}
