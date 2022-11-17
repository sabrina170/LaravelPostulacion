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
        $usuarios = User::orderByDesc('id')->get();

        // return redirect()->route('admin.index');
        $count = 5;
        return view('admin.index',compact('count','usuarios'));
    }

    public function listarpostulantes()
    {
        $infos = Info::orderByDesc('id')->get();

        // return redirect()->route('admin.index');
        return view('admin.postulantes',compact('infos'));
    }

    public function DetalleDocumento($id)
    {
        $infos = Documento::where('id_user', '=', $id)->get();
        // return redirect()->route('admin.index');
        return view('admin.misdocumentos',compact('infos'));
        // dd($infos);
    }
}
