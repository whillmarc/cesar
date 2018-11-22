<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class CentroRequest extends FormRequest
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
            'nombre' => 'required|min:5|max:40 |regex:/^[a-z]+$/i', 
            'rif' => 'required|min:7',   
            'correo' => 'required|string|email|max:255', 
            'contrasena' => 'required|string|min:6', 
            'banco' => 'required', 
            'cuenta' => 'required|regex:/^[0-9]+$/i', 
            'condicion' => 'required',
            'observaciones' => 'required', 
            'parroquia' => 'required', 
            'avenida' => 'required',
            'tipo_casa' => 'required', 
            'numero_casa' => 'required|regex:/^[0-9]+$/i'
        ];
    }

        public function messages(){

    return [
        'nombre.required' => 'El nombre es obligatorio', 
        'nombre.min' => 'El nombre debe contener minimo 5 letras', 
        'nombre.max' => 'El nombre debe tener maximo 40 letras', 
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
        'banco.required' => 'El banco es obligatorio', 
        'cuenta.required' => 'El numero de cuenta es obligatorio', 
        'cuenta.regex' => 'La cuenta solo acepta numeros', 
        'condicion.required' => 'La condicion es obligatoria', 
        'observaciones.required' => 'Las observaciones son obligatoria', 
        'parroquia.required' => 'La parroquia es obligatoria', 
        'avenida.required' => 'La avenida es obligatoria', 
        'tipo_casa.required' => 'El tipo de casa es obligatorio',  
        'numero_casa.regex' => 'El numero solo acepta valores numericos', 
        'numero_casa.required' => 'El numero de casa es obligatorio'
   ];

      }

    


}
