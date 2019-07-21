<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class NuevoUsuarioRequest extends FormRequest
{
    //Definiendo redirecciones de rutas al "caer" las requests
    protected $redirect = '/register';
    /**
     * Determine if the user is authorized to make this request.
     *
     * @return bool
     */
    public function authorize()
    {
        return true;
    }

    /**
     * Get the validation rules that apply to the request.
     *
     * @return array
     */
    public function rules()
    {
        return [
            'nombre'            => 'required|max:150|regex:/^\w+[ ]{1}\w+/',
            'correo'            => 'required|email|max:90',
            'user'              => 'required|max:50',
            'pass'              => 'required',
            'password_confirm'  => 'required',
        ];
    }
    
    //Al ocurrir errores se pueden personalizar algunos mensajes
    public function messages()
    {
        return [
            'nombre.required'           => 'Especifique un nombre.',
            'nombre.max'                => 'Ha excedido el máximo de caracteres para el nombre.',
            'nombre.regex'              => 'Debe ingresar nombre válido, ejemplo, Juan Pérez.',
            'correo.required'           => 'Especifique un correo.',
            'correo.email'              => 'Debe ingresar un correo válido, ejemplo, alguien@ejemplo.cl.',
            'correo.max'                => 'Ha excedido el máximo de caracteres para ingesar su correo.',
            'user.required'             => 'Especifique un nombre de usuario.',
            'correo.max'                => 'El usuario proporcionado no deberá exceder los 50 caracteres.',
            'pass.required'             => 'Especifique una contraseña.',
            'password_confirm.required' => 'Especifique la confirmación de la contraseña.'
        ];
    }
}
