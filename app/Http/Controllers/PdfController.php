<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class PdfController extends Controller
{
    public function mform()
    {
        return view('documentos/docs');
    }

    public function mguardar(Request $request)
    {
        dd($request);
    }
}
