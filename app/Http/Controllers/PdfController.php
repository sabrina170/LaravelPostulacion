<?php

namespace App\Http\Controllers;

use App\Models\Documento;
use Illuminate\Http\Request;
use PDF;
use App\Models\Info;

class PdfController extends Controller
{
    /**
     * Write code on Method
     *
     * @return response()
     */
    public function preview()
    {
        return view('preview');
    }

    /**
     * Write code on Method
     *
     * @return response()
     */
    public function generatePDF()
    {
        // $pdf = PDF::loadView('generar');
        // return $pdf->download('demo.pdf');
    }

    // segunda forma de hacerlo
    public function getIndex()
    {
        return view('vista_general');
    }
    public function getGenerar2(Request $request)
    {
        $id_user = $request->get('id_user');
        $infos = Info::where('user_id', '=', $id_user)->get();

        $accion = $request->get('accion');
        if ($image = $request->file('croquis')) {
            $destinatarioPath = 'images-croquis/';
            $profileImage = date('YmdHis') . "." . $image->getClientOriginalExtension();
            $image->move($destinatarioPath, $profileImage);
            // $alu['image'] = "$profileImage";
        }

        $data = [
            'lugar' => $request->get('lugar'),
            'fecha' => $request->get('fecha'),
            'croquis' => $profileImage,
            'infos' => $infos
        ];

        // dd($data);
        if ($accion == 'ver') {
            return  view('documentos.pdf_doc2', $data);
        } elseif ($accion == 'descargar') {

            // return $this->pdf($request);
            $pdf = PDF::loadView('documentos.pdf_doc2', $data);

            $nombreArchivo = date('YmdHis') . ".pdf";
            $rutaGuardado = 'images-cer/';
            file_put_contents($rutaGuardado . $nombreArchivo, $pdf->output());

            // return $pdf->download('demo.pdf');

            $doc = Documento::create([
                'ruta' => $nombreArchivo,
                'id_user' => $id_user,
                'tipo' => 2,
                'estado' => 1,
            ]);

            return redirect()->route('documentos.index', $id_user);
        }
    }
    public function getGenerar3(Request $request)
    {
        $id_user = $request->get('id_user');
        $infos = Info::where('user_id', '=', $id_user)->get();

        $accion = $request->get('accion');
        if ($image = $request->file('firma')) {
            $destinatarioPath = 'images-firma/';
            $profileImage = date('YmdHis') . "." . $image->getClientOriginalExtension();
            $image->move($destinatarioPath, $profileImage);
            // $alu['image'] = "$profileImage";
        }

        $data = [
            'firma' => $profileImage,
            'infos' => $infos
        ];

        // dd($data);
        if ($accion == 'ver') {
            return  view('documentos.pdf_doc3', $data);
        } elseif ($accion == 'descargar') {

            // return $this->pdf($request);
            $pdf = PDF::loadView('documentos.pdf_doc3', $data);
            $nombreArchivo = date('YmdHis') . ".pdf";
            $rutaGuardado = 'images-cer/';
            file_put_contents($rutaGuardado . $nombreArchivo, $pdf->output());

            // return $pdf->download('demo.pdf');

            $doc = Documento::create([
                'ruta' => $nombreArchivo,
                'id_user' => $id_user,
                'tipo' => 3,
                'estado' => 1,
            ]);

            return redirect()->route('documentos.index', $id_user);
        }
    }

    public function getGenerar4(Request $request)
    {
        $id_user = $request->get('id_user');
        $infos = Info::where('user_id', '=', $id_user)->get();

        $accion = $request->get('accion');
        if ($image = $request->file('firma')) {
            $destinatarioPath = 'images-firma/';
            $profileImage = date('YmdHis') . "." . $image->getClientOriginalExtension();
            $image->move($destinatarioPath, $profileImage);
            // $alu['image'] = "$profileImage";
        }

        $data = [
            'lugar' => $request->get('lugar'),
            'fecha' => $request->get('fecha'),
            'nombre_afp' => $request->get('nombre_afp'),
            'codigo_afp' => $request->get('codigo_afp'),
            'list' => $request->get('check_list'),
            'firma' => $profileImage,
            'infos' => $infos
        ];

    //    dd($request->get('check_list'));

        // dd($data);
        if ($accion == 'ver') {
            return  view('documentos.pdf_doc4', $data);
        } elseif ($accion == 'descargar') {

            // return $this->pdf($request);
            $pdf = PDF::loadView('documentos.pdf_doc4', $data);

            $nombreArchivo = date('YmdHis') . ".pdf";
            $rutaGuardado = 'images-cer/';
            file_put_contents($rutaGuardado . $nombreArchivo, $pdf->output());

            // return $pdf->download('demo.pdf');

            $doc = Documento::create([
                'ruta' => $nombreArchivo,
                'id_user' => $id_user,
                'tipo' => 4,
                'estado' => 1,
            ]);

            return redirect()->route('documentos.index', $id_user);
        }
    }

    public function pdf($request)
    {

        $accion = $request->get('accion');
        // return $accion;

        //     $ruc = "10072486893";
        // $numero = "00000412";
        // $nombres = "Sabrina Pomajulca";
        // $dia = "09";
        // $mes = "04";
        // $ayo = "17";
        // $direccion = "Lima Perú";
        // $dni = "23918745";
        // $total = 0;
        // $articulos = [
        //     [
        //         "cantidad" => 3,
        //         "descripcion" => "COCINA A GAS",
        //         "precio" => 400.00,
        //         "importe" => 1200,
        //     ],
        //     [
        //         "cantidad" => 1,
        //         "descripcion" => "PLANCHA",
        //         "precio" => 85.00,
        //         "importe" => 85.00,
        //     ],
        // ];
        // foreach ($articulos as $key => $value) {
        //     $total += $value["importe"];
        //     $articulos[$key]["precio"] = number_format($value["precio"],2,'.',' ');;
        //     $articulos[$key]["importe"] = number_format($value["importe"],2,'.',' ');;

        // }
        // $total = number_format($total,2,'.',' ');


        // $data['nombres'] = $request->get('accion');
        // $data['dia'] = $dia;
        // $data['mes'] = $mes;
        // $data['ayo'] = $ayo;
        // $data['direccion'] = $direccion;
        // $data['dni'] = $dni;
        // $data['articulos'] = $articulos;
        // $data['total'] = $total;
        // $data['tipo'] = $tipo;

        // if ($accion=='ver') {
        // return  view('generar',$data);
        // }elseif($accion=='descargar'){
        //     $pdf = PDF::loadView('generar',$data);
        // return $pdf->download('demo.pdf');

        // if ($image = $request->file('image')) {

        // $destinatarioPath = 'images-cer/';
        // $profileImage = date('YmdHis') . "." . $pdf->getClientOriginalExtension();
        // $pdf->move($destinatarioPath, $profileImage);
        // $input['image'] = "$profileImage";

        // $nombreArchivo = date('YmdHis').".pdf";
        // $rutaGuardado = 'images-cer/';
        // file_put_contents( $rutaGuardado.$nombreArchivo, $pdf->output());
        // dd($pdf);
        // }
        // return $accion;
        // return $accion;
        // }else{
        //     // $mpdf->Output($namefile,"D");
        // }
    }
}
