<?php

namespace App\Http\Controllers;

use App\Http\Requests\InfoRequest;
use App\Http\Requests\TareaRequest;
use App\Models\Estudio;
use App\Models\Info;
use App\Models\Laboral;
use Illuminate\Contracts\Session\Session;
use Illuminate\Http\Request;
use PhpParser\Node\Stmt\Return_;
use Illuminate\Support\Facades\DB;

class InfoController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $infos = Info::orderByDesc('id')->get();
        return view('info.index', compact('infos'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(InfoRequest $inforequest)
    {
        //valida los datos de INfo
        $datos = $inforequest->validated();
        //crea un registro en la tabla info con el ku
        $info = Info::create($datos);
        $ku = $inforequest->ku;
        $grado = $inforequest->grado;
        $nombreie = $inforequest->nombreie;
        $estudia = $inforequest->estudia;
        $horario = $inforequest->horario;
        $disponibilidad = $inforequest->disponibilidad;


        $callcenter = $inforequest->callcenter;
        $empresa = $inforequest->empresa;
        $puesto = $inforequest->puesto;
        $tiempo = $inforequest->tiempo;
        $tipo = $inforequest->tipo;
        $konecta = $inforequest->konecta;


        //CREAR REGISTRO EN TABLA ESTUDIOS
        DB::table('estudios')->insert(
            [
                'grado' => $grado,
                'nombreie'  => $nombreie,
                'estudia'  => $estudia,
                'horario'  =>  $horario,
                'disponibilidad'  =>  $disponibilidad,
                'ku'  => $ku
            ]
        );

        //CREAR REGISTRO EN TABLA ESTUDIOS
        DB::table('laborales')->insert(
            [
                'callcenter' => $callcenter,
                'empresa' => $empresa,
                'puesto' => $puesto,
                'tiempo' => $tiempo,
                'tipo' => $tipo,
                'konecta' => $konecta,
                'ku'  => $ku
            ]
        );

        // $ku->update($datos);
        //ACTUALIZA LA TABLA USER EN EL ESTADO 2

        DB::table('users')->where('ku', $ku)->limit(1)->update(['estado' => '2']);
        // return redirect()->route('info.index');
        return redirect()->route('privada');
        dd($datos);
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Info  $info
     * @return \Illuminate\Http\Response
     */
    public function show(Info $info)
    {
        return view('info.show', ['info' => $info]);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Info  $info
     * @return \Illuminate\Http\Response
     */
    public function edit(Info $info)
    {
        // dd($info);
        return view('info/edit', compact('info'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Info  $info
     * @return \Illuminate\Http\Response
     */
    public function update(InfoRequest $request, Info $info)
    {
        $datos = $request->validated();
        // dd($datos);
        $info->update($datos);
        return redirect()->route('info.index');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Info  $info
     * @return \Illuminate\Http\Response
     */
    public function destroy(Info $info)
    {
        $info->delete();
        $nombre = $info->nombre;
        return redirect()->route('info.index')->with('msjdelete', 'Postulante (' . $nombre . ') eliminado');
    }
}
