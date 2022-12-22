<?php

namespace App\Http\Controllers;

use App\Http\Requests\UserRequest;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Auth;
use Database\Seeders\RoleSeeder;
use Spatie\Permission\Traits\HasRoles;
use Spatie\Permission\Models\Role;
use Spatie\Permission\Models\Permission;
use Illuminate\Support\Facades\Http;

class LoginController extends Controller
{
    public function register(UserRequest $request)
    {
        //falta valiaar datos que sean verdaderos
        $user = $request->validated();
        // $info = Info::create($datos);
        $user = new User();

        $user->name = $request->name;
        $user->email = $request->email;
        $user->password = Hash::make($request->password);
        $user->estado = '1';
        // $user->ku = date("Ymd-His");
        $user->apellido_pa = $request->apellido_pa;
        // $user->apellido_ma = $request->apellido_ma;
        $user->tipo_dni = $request->tipo_dni;
        $user->dni = $request->dni;
        $user->celular = $request->celular;


        $user->save();
        Auth::login($user);




        return redirect(route('login'));
    }

    public function login(Request $request)
    {
        //validacion

        $credentials = [
            "email" => $request->email,
            "password" => $request->password,
            // "active" =>true
        ];

        // $tipo = $request->tipo;

        $remember = ($request->has('remenber') ? true : false);

        if (Auth::attempt($credentials, $remember)) {
            $request->session()->regenerate();
            $estado = Auth::user()->estado;
            $id_user = Auth::user()->id;

            if (Auth::user()->hasRole('admin')) {
                return redirect()->route('admin.index');
            } else {
                if ($estado == 1) {
                    return redirect()->intended('privada');
                } else if ($estado == 2) {
                    return redirect()->intended('privada');
                } else if ($estado == 22) {
                    return redirect()->intended('entrevista');
                } else if ($estado == 3) {
                    return redirect()->intended('entrevista');
                } else if ($estado == 4) {
                    return redirect()->route('documentos.index', $id_user);
                } else if ($estado == 5) {
                    return redirect()->intended('misdocumentospos');
                } else if ($estado == 6) {
                    return redirect()->intended('finalizado');
                }
            }
        } else {
            return redirect('login');
        }
    }

    public function logout(Request $request)
    {
        Auth::logout();
        //cerrar session o limpiar session
        $request->session()->invalidate();
        $request->session()->regenerateToken();
        return redirect(route('login'));
    }
}
