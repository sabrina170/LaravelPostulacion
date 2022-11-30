<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Http;

class PostGuzzleController extends Controller
{
    public function index()
    {
        $response = Http::get('http://jsonplaceholder.typicode.com/posts');

        $jsonData = $response->json();

        dd($jsonData);
    }

    public function store()
    {
        $response = Http::post('http://jsonplaceholder.typicode.com/posts', [
                    'title' => 'This is test from tutsmake.com',
                    'body' => 'This is test from tutsmake.com as body',
                ]);

        dd($response->successful());
    }

    public function EnviarDatosCobalt()
    {
        $url = 'https://general.ionosfera.pe/api/createLead';
        $response = Http::withBasicAuth('6YQa@Jxx','mK$VmxC2J08V')
        ->post($url,[

            "agentId"=> "",
            "apellidos"=> "Guiribalde",
            "calle"=> "",
            "chatId"=> "",
            "cliente"=> "HIPATIA",
            "cp"=> "",
            "dispositivo"=> "",
            "email"=> "",
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
            "nombre"=> "Gerald",
            "numDoc"=> "88888888",
            "observaciones"=> "",
            "operadorRed"=> "",
            "origen"=> "",
            "parametros"=> "",
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
            "telefono"=> "900520514",
            "tipDoc"=> "",
            "tipo"=> "c2c",
            "tsource"=> "400",
            "tsourceproveedor"=> "",
            "userAgent"=> "Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/99.0.4844.51 Safari/537.36",
            "versionLanding"=> ""
        ]);

        dd($response-> object());

        return $response-> object();
    }
}
