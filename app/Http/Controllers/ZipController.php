<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use ZipArchive;
use File;
use App\Models\Documento;

class ZipController extends Controller
{
    public function zipFile2()
    {
        $zip = new ZipArchive;
        $filname = 'tareas.zip';
        if ($zip->open(public_path($filname), ZipArchive::CREATE) === TRUE) {

            // $docs_user = Documento::where('id_user', '=', $id_user->id)->get();
            // $docs_user = Documento::where('id_user', '=', 3)->get();
            $files = \File::files(public_path('images-cer'));


            foreach ($files as $key => $value) {

                // foreach ($docs_user as $do) {
                //     if ($do->ruta == $value) {
                $file  = basename($value);
                $zip->addFile($value, $file);
                //     }
                // }
            }
            $zip->close();
        }
        return response()->download(public_path($filname));
    }
}
