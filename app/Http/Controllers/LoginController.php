<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Auth;

class LoginController extends Controller
{
    public function register(Request $request)
    {
        //falta valiaar datos que sean verdaderos
        $user = new User();

        $user->name= $request->name;
        $user->email= $request->email;
        $user->password= Hash::make($request->password);
        $user->estado= '1';
        $user->ku= date("Ymd-His");

        $user->save();
        Auth::login($user);

        return redirect(route('login'));
    }

    public function login(Request $request)
    {
        //validacion

        $credentials =[
            "email" => $request->email,
            "password" => $request->password,
            // "active" =>true
        ];

        // $tipo = $request->tipo;

        $remember = ($request->has('remenber')? true: false);

        if (Auth::attempt($credentials,$remember)) {
            $request->session()->regenerate();
            if (Auth::user()->hasRole('admin')) {
                    return redirect()->intended('admin.index');
            }else {
                return redirect()->intended('privada');
            }
        }else{
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
