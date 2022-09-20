<?php

namespace App\Http\Controllers;

use App\Models\Info;
use Illuminate\Http\Request;
use PhpParser\Node\Stmt\Return_;

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
    public function store(Request $request)
    {

        $datos = $request->validate(
            [
                'nombre' => 'required',
                'telefono' => 'required',
                'apellido' => 'required',
                'numero_documento' => 'required',
                'fecha_nacimiento' => 'required',
                'sexo' => 'required',
                'pais' => 'required',
                'departamento' => 'required',
                'email' => 'required',
                'provincia' => 'required',
                'distrito' => 'required',
                'direccion' => 'required',
                'tipo_documento' => 'required',
                'ku' => 'required'
            ]
        );

        $info = Info::create($datos);
        return redirect()->route('info.index');
        // dd($datos);
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Info  $info
     * @return \Illuminate\Http\Response
     */
    public function show(Info $info)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Info  $info
     * @return \Illuminate\Http\Response
     */
    public function edit(Info $info)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Info  $info
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Info $info)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Info  $info
     * @return \Illuminate\Http\Response
     */
    public function destroy(Info $info)
    {
        //
    }
}
