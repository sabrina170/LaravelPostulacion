<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Mail\ContactanosMailable;
use Illuminate\Support\Facades\Mail;

class ContactanosController extends Controller
{
    public function index()
    {
        return view('contactanos.index');
    }

    public function store()
    {
        $correo = new ContactanosMailable;

        //a quien se lo mandaras
        Mail::to('sabrina.pomajulca@tecsup.edu.pe')->send($correo);
        return "Mensaje enviado";
    }
}
