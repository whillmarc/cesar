<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class AliadoRequest extends FormRequest
{
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
            'nombre' => 'required|min:3|max:25|regex:/^[a-z]+$/i',
            'rif' => 'required|min:7',
            'correo' => 'required|string|email|max:255',
            'contrasena' => 'required|string|min:6',
            'tipo' => 'required',
            'rol' => 'required',
            'banco' => 'required',
            'cuenta' => 'required|regex:/^[0-9]+$/i',
            'parroquia' => 'required',
            'avenida' => 'required',
            'tipo_casa' => 'required',
            'numero_casa' => 'required|regex:/^[0-9]+$/i',
            'pagina_web' => 'required|url'
        ];

     

    }

    public function messages(){

    return [
        'nombre.required' => 'El nombre es obligatorio',
        'nombre.min' => 'El nombre debe contener minimo 3 letras',
        'nombre.max' => 'El nombre debe tener maximo 25 letras',
        'nombre.regex' => 'El nombre solo acepta letras',
        'rif.required' => 'El rif es obligatorio',
        'rif.min:7' => 'La rif debe contener minimo 7 caracteres',
        'correo.required' => 'El correo es obligatorio',
        'correo.string' => 'El correo debe contener entre letras, numeros y algunos caracteres especiales',
        'correo.email' => 'El formato de correo introducido es invalido',
        'correo.max:255' => 'El correo debe tener una longitud maxima de 255 caracteres',
        'contrasena.required' => 'La contrasena es obligatoria',
        'contrasena.string' => 'La contraseña debe contener letras, numeros y algunos caracteres especiales',
        'contrasena.min' => 'La contrasena debe contener un minimo de 6 caracteres',
        'tipo.required' => 'El tipo de aliado es obligatorio',
        'rol.required' => 'El rol es obligatorio',
        'banco.required' => 'El banco es obligatorio',
        'cuenta.required' => 'El numero de cuenta es obligatorio',
        'cuenta.regex' => 'La cuenta solo acepta numeros',
        'parroquia.required' => 'La parroquia es obligatoria',
        'avenida.required' => 'La avenida es obligatoria',
        'tipo_casa.required' => 'El tipo de casa es obligatorio',
        'numero_casa.regex' => 'El numero de casa solo acepta numeros',
        'pagina_web.required' => 'La pagina web es obligatorio',
        'pagina_web.url' => 'La url ingresada no es valida'
   ];

      }





}
