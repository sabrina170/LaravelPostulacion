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

    public function index()
    {
        $infos = Info::orderByDesc('id')->get();
        return view('info.index', compact('infos'));
    }


    public function create()
    {
        //
    }


    public function store(InfoRequest $inforequest)
    {
        //valida los datos de INfo
        $datos = $inforequest->validated();

        //dd(json_encode($inforequest->all()));

        //crea un registro en la tabla info con el ku
        // dd($datos);
        $datos['datos_pc'] = "";
        $info = Info::create($datos);
        $user_id = $inforequest->user_id;

        //ACTUALIZA LA TABLA USER EN EL ESTADO 2
        DB::table('users')->where('id', $user_id)->limit(1)->update(['estado' => '2']);
        // return redirect()->route('info.index');
        return redirect()->route('privada');



        // REGISTRAR EN COBALT

         $url = 'https:general.ionosfera.pe/api/createLead';
         $response = Http::withBasicAuth('6YQa@Jxx','mK$VmxC2J08V')
         ->post($url,[

             "agentId"=> "",
             "apellidos"=> "Guiribalde",
             "calle"=> "",
             "chatId"=> "",
             "cliente"=> "HIPATIA",
             "cp"=> "",
             "dispositivo"=> "",
             "email"=> $request->email,
             "fabricanteMovil"=> "",
             "geoCalle"=> "",
             "geoCiudad"=> "",
             "geoISP"=> "",
             "geoLatLng"=> "",
             "geoNumero"=> "",
             "geoPais"=> "",
             "geoProvincia"=> "",
             "geoRegion"=> "",
             "idvar"=> "",
             "ipCliente"=> "",
             "lp"=> "",
             "microsite"=> "konectamarketingdigital.pe",
             "modeloMovil"=> "",
             "navegador"=> "Chrome",
             "nombre"=> $request->name,
             "numDoc"=> $request->dni,
             "observaciones"=> "",
             "operadorRed"=> "",
             "origen"=> "",
             "parametros"=>  json_encode($inforequest->all()),
             "pop"=> "",
             "popCep"=> "",
             "priority"=> "1",
             "procedencia"=> "",
             "producto"=> "test-hipatia",
             "regalo"=> "",
             "resCep"=> "",
             "resCliente"=> "",
             "resolucion"=> "",
             "sistemaOperativo"=> "Windows",
             "telefono"=> $request->celular,
             "tipDoc"=> $request->tipo_dni,
             "tipo"=> "c2c",
             "tsource"=> "400",
             "tsourceproveedor"=> "",
             "userAgent"=> "Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/99.0.4844.51 Safari/537.36",
             "versionLanding"=> ""
         ]);

        // dd($response-> object());]
    }

    public function store_pc(Request $request)
    {
        // $info = Info::create($datos);
        $user_id = $request->user_id;

        // Guardar foto
        if ($image = $request->file('image')) {
            $destinatarioPath = 'images-auriculares/';
            $AuricularImage = date('YmdHis') . "." . $image->getClientOriginalExtension();
            $image->move($destinatarioPath, $AuricularImage);
        }


        $datos_estructura = array(
            'ram' => $request->ram,
            'procesador' => $request->procesador,
            'windows' => $request->windows,
            'tipo_auricular' => $request->tipo_auricular,
            'foto_auricular' => $AuricularImage,
            // 'detalles' => json_decode($cupon['detalles'], true)
        );

        //ACTUALIZA LA TABLA USER EN EL ESTADO 3
        DB::table('users')->where('id', $user_id)->limit(1)->update([
            'estado' => '22'
        ]);

        DB::table('infos')->where('user_id', $user_id)->limit(1)->update([
            'datos_pc' => json_encode($datos_estructura)
        ]);
        // return redirect()->route('info.index');
        return view('entrevista.index');
    }

    public function show(Info $info)
    {
        return view('info.show', ['info' => $info]);
    }


    public function edit(Info $info)
    {
        // dd($info);
        return view('info/edit', compact('info'));
    }

    public function update(InfoRequest $request, Info $info)
    {
        $datos = $request->validated();
        // dd($datos);
        $info->update($datos);
        return redirect()->route('info.index');
    }

    public function destroy(Info $info)
    {
        $info->delete();
        $nombre = $info->nombre;
        return redirect()->route('info.index')->with('msjdelete', 'Postulante (' . $nombre . ') eliminado');
    }
}
