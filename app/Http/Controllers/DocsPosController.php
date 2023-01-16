<?php

namespace App\Http\Controllers;

use App\Models\Docpos;
use App\Models\DocposImage;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\DB;

class DocsPosController extends Controller
{
    public function listar()
    {
        $id_user = Auth::user()->id;
        // $alumnos  = Alumno::orderByDesc('id')->where('id', $alum)->get();
        // // llamamos si tiene un tipo "CERTIFICADO"
        // $certificado  = Docpos::orderByDesc('id')->where('alumno_id', $alum)->get()->limit(1);

        // $certificados_imagenes  = CertificadoImage::orderByDesc('id')->get();

        $certificado = Docpos::where('tipo', '=', 1)
            ->where('user_id', '=', $id_user)
            ->get();
        $constancia = Docpos::where('tipo', '=', 2)
            ->where('user_id', '=', $id_user)
            ->get();

        $antecedente = Docpos::where('tipo', '=', 3)
            ->where('user_id', '=', $id_user)
            ->get();
        $dni = Docpos::where('tipo', '=', 4)
            ->where('user_id', '=', $id_user)
            ->get();
        $renta = Docpos::where('tipo', '=', 5)
            ->where('user_id', '=', $id_user)
            ->get();

        $docs  = DocposImage::orderByDesc('id')->get();
        // if (count($constancia) > 0) {

        //     return view('documentos.docs', compact('certificado', 'docs', 'constancia', 'antecedente', 'dni', 'renta'));
        // } else {
        // }

        return view('documentos.docs', compact('certificado', 'docs', 'constancia', 'antecedente', 'dni', 'renta'));


        // $certificados = Departamento::orderByDesc('id')->get();

    }

    public function subirarchivos(Request $request)
    {
        $id_user = Auth::user()->id;
        $doc = Docpos::create([
            'nombre' => $request->nombre,
            'tipo' => $request->tipo,
            'user_id' => $id_user,
        ]);

        // return $certi->id;
        // GALERIA DE IMAGENES
        if ($request->hasfile('images')) {
            $uploadPath = 'images-legajo/';

            $i = 1;
            foreach ($request->file('images') as $imagefile) {
                $exten = $imagefile->getClientOriginalExtension();
                $filename = time() . $i++ . "." . $exten;
                $imagefile->move($uploadPath, $filename);
                $finalImagePathName = $uploadPath . $filename;
                // $input['image'] = "$profileImage";

                $doc->docposImages()->create([
                    'docpos_id' => $doc->id,
                    'image' => $finalImagePathName,
                ]);
            }
        }
        return redirect()->route('documentos.docs');
    }

    public function cambiardoc($id, $id_user)
    {
        $consulta2 =  DB::table('documentos')->where('id', $id)->update([
            'estado' => '2'
        ]);
        return redirect()->route('misdocumentos', $id_user);
    }
}
