<?php

namespace App\Http\Controllers;

use App\Models\Documento;
use App\Models\Info;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use League\CommonMark\Node\Block\Document;

class DocController extends Controller
{
    public function listardoc1(User $id_user, $tipo_doc)
    {
        $infos = Info::where('user_id', '=', $id_user->id)->get();
        $documento = Documento::where('id_user', '=', $id_user->id)->where('tipo', '=', $tipo_doc)->get();

        if (count($documento) > 0) {
            return view('documentos.doc1', compact('infos', 'documento'));
        } else {
            return view('documentos.doc1', compact('infos'));
        }
    }

    public function listardoc2(User $id_user, $tipo_doc)
    {
        // $id_user = $id->id;
        // $infos=  DB::table('infos')->where('user_id', $id)->get();
        $infos = Info::where('user_id', '=', $id_user->id)->get();
        // $infos  = Info::orderByDesc('id')->where('user_id', $id)->get();
        $documento = Documento::where('id_user', '=', $id_user->id)->where('tipo', '=', $tipo_doc)->get();

        if (count($documento) > 0) {
            return view('documentos.doc2', compact('infos', 'documento'));
        } else {
            return view('documentos.doc2', compact('infos'));
        }
    }

    public function listardoc3(User $id_user, $tipo_doc)
    {
        $infos = Info::where('user_id', '=', $id_user->id)->get();
        $documento = Documento::where('id_user', '=', $id_user->id)->where('tipo', '=', $tipo_doc)->get();

        if (count($documento) > 0) {
            return view('documentos.doc3', compact('infos', 'documento'));
        } else {
            return view('documentos.doc3', compact('infos'));
        }
    }

    public function listardoc4(User $id_user, $tipo_doc)
    {
        $infos = Info::where('user_id', '=', $id_user->id)->get();
        $documento = Documento::where('id_user', '=', $id_user->id)->where('tipo', '=', $tipo_doc)->get();

        if (count($documento) > 0) {
            return view('documentos.doc4', compact('infos', 'documento'));
        } else {
            return view('documentos.doc4', compact('infos'));
        }
    }
    public function listardoc5(User $id_user, $tipo_doc)
    {
        $infos = Info::where('user_id', '=', $id_user->id)->get();
        $documento = Documento::where('id_user', '=', $id_user->id)->where('tipo', '=', $tipo_doc)->get();

        if (count($documento) > 0) {
            return view('documentos.doc5', compact('infos', 'documento'));
        } else {
            return view('documentos.doc5', compact('infos'));
        }
    }
    public function listardoc6(User $id_user, $tipo_doc)
    {
        $infos = Info::where('user_id', '=', $id_user->id)->get();
        $documento = Documento::where('id_user', '=', $id_user->id)->where('tipo', '=', $tipo_doc)->get();

        if (count($documento) > 0) {
            return view('documentos.doc6', compact('infos', 'documento'));
        } else {
            return view('documentos.doc6', compact('infos'));
        }
    }

    public function listardocs(User $id_user)
    {
        $docs = Documento::where('id_user', '=', $id_user->id)->get();
        // $infos  = Info::orderByDesc('id')->where('user_id', $id)->get();
        return view('documentos.index', compact('docs'));
    }

    public function cambiarestadopos(Request $request)
    {
        $id_user = $request->id_user;
        DB::table('users')->where('id', $id_user)->limit(1)->update([
            'estado' => '5'
        ]);
        echo 1;
        // return view('documentos.mensaje');
    }
    public function cambiarestadopos2(Request $request)
    {
        $id_user = $request->id_user;
        DB::table('users')->where('id', $id_user)->limit(1)->update([
            'estado' => '6'
        ]);
        echo 1;
        // return view('documentos.mensaje');
    }
}
