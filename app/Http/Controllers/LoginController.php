<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Usuario; //Llamada al modelo
use App\Http\Requests\NuevoUsuarioRequest;

class LoginController extends Controller
{
    public function index()
    {
        return view('bienvenida');
    }

    public function register()
    {
        return view('register');
    }

    public function login()
    {
        return view('login');
    }

    //Registros
    public function registro_user(NuevoUsuarioRequest $request)
    {
        $regex_ = "/^([a-zA-ZáéíóúÁÉÍÓÚñÑ]+[0-9]+)$|^([0-9]+[a-zA-ZáéíóúÁÉÍÓÚñÑ]+)$/";
        if( (strlen($request->user) <=5 ) ||  ( preg_match($regex_, $request->user)!=1 ) )
            $cadena = 'El usuario debe poseer mínimo 5 caracteres de largo, letras y números';
        elseif($request->pass != $request->password_confirm)
            $cadena = 'Las contraseñas son distintas';
        elseif( (strlen($request->pass) <=5) || ( preg_match($regex_,$request->pass) != 1) )
            $cadena = 'La contraseña debe poseer mínima 5 caracteres de largo, letras y números';
        else
        {
            $nuevousuario = new Usuario();
            //user y correo deben ser unicos!!!
            $correo = Usuario::where('correo',$request->correo)->get();
            //"SELECT * FROM usuarios WHERE correo=".$request->correo."";
            $user = Usuario::where('user',$request->user)->get();
            //"SELECT * FROM usuarios WHERE user=".$request->user."";
            if( sizeof($correo) > 0)
                $cadena = 'Correo en uso actualmente';
            elseif( sizeof($user) > 0)
                $cadena = 'Usuario en uso actualmente';
            else
            {
                //Seteando valores
                $nuevousuario->nombre = $request->nombre;
                $nuevousuario->correo = $request->correo;
                $nuevousuario->user = $request->user;
                $nuevousuario->password = $request->pass;
                $nuevousuario->rol = 1; //Uno para los usuarios. 2 para admin, etc...
                
                //Guardado
                $nuevousuario->save();
                $cadena ="Usuario ingresado exitosamente";
            }
            
        } 
        return view('register', compact('cadena'));

    }
}
